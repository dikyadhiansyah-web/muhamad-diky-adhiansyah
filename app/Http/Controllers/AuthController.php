<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna; // <-- letakkan di sini

class AuthController extends Controller
{
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

        $data = Pengguna::all(); // ambil data dari database
        return view('daftar_pengguna', compact('data'));
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}