<?php

namespace App\repositories;

use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\PasswordEmail;
use Illuminate\Support\Facades\Mail;

class AuthenticationRepository implements AuthenticationInterface
{
    public function login($data)
    {
        return Auth::attempt($data);
    }

    
    public function addUser($email, $name){
        $password = str()->random(8);
        session()->put('email' , $email);

        Mail::to($email)->send(new PasswordEmail($name, $password));

        return $password;

    }
}
