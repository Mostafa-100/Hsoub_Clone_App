<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth-pages.login');
    }

    public function logUser()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        if(auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('main.show');
        } else {
            return redirect()->route('login')->with('login_fail', 'هذا المستخدم غير موجود');
        }
    }

    public function logout() {
        auth()->logout();
        request()->session()->invalidate();

        return redirect()->route('main.show');
    }
}
