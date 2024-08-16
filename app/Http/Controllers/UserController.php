<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("dashboard", [
            "users"=> $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->save();
        return redirect()->route("users.list");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit" , [
            "user"=> $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        return redirect()->route("users.list");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with("success","utilisateur supprimé avec succès");
    }
}
