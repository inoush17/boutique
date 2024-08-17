<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    public function login()
    {
        return view('login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function show(){

        return view('users.create');
    }
}
