<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'), true)) {
            $user = User::where('email', $request->email)->first();
            $user->update([
                'last_login' => now(),
            ]);

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => 'Email atau kata sandi salah.']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|lowercase|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
