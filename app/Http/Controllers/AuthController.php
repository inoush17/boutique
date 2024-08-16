<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\LoginRequest;
use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    private AuthenticationInterface $authInterface;
    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            if($this->authInterface->login($data))
            return redirect()->route('dashboard');
        else
            return back()->with('error', 'Email ou mot de passe incorrect(s).');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }


    public function addUser(Request $request){
        $user = new User();

        $email = $request->email;
        $name = $request->name;

        $user->name = $name;
        $user->email = $email;
        $user->password = $this->authInterface->addUser($email, $name);

        $user->save();

        return redirect()->route('dashboard');
    }
}
