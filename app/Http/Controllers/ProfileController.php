<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index()
    {
        return view("profile.view");
    }
    
    public function edit(User $user)
    {
        return view('profile.update', compact('user'));
    }

    public function update(User $user)
    {
        $attr = request()->validate([
            'name' => ["required", "min:3"],
            'email' => ["required", "email"],
            'bio' => ["min:3"],
            'password' => ["required", "min:6"] // i want to use bcrypt here !!
        ]);

        Auth::user()->update($attr);
        return redirect("/profile");
    }

    public function destroy(User $user)
    {
        Auth::user()->delete();
        return redirect('/');
    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function create()
    {
        
    }
}
