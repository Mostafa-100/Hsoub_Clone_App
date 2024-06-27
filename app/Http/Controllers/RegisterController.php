<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth-pages.register');
    }

    public function registerUser()
    {
        $validated = request()->validate([
            'firstname' => 'required|max:30',
            'lastname' => 'required|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min: 7',
            'username' => 'required|min: 5|max: 20, unique:users,username'
        ]);

        User::create($validated);

        return redirect()->route('login');
    }
}
