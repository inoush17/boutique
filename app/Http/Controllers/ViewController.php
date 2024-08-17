<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
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
