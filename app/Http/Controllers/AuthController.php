<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // contoh login sederhana (tanpa database)
        if ($request->username === 'admin' && $request->password === '123') {
            session(['user' => $request->username]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal!');
    }

    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}