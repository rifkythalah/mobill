<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin'
        ]);

        Auth::login($user);

        return redirect()->route('admin.login'); 
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Periksa kredensial login
        if (Auth::attempt($credentials)) {
            // Set session user agar nama muncul di navbar
            session(['user' => [
                'data' => [
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'id' => Auth::user()->id,
                    'role' => Auth::user()->role,
                ]
            ]]);
            // Redirect ke dashboard jika berhasil
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, redirect kembali dengan pesan error
        return redirect()->back()->withErrors(['login' => 'Incorrect email or password.']);
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user');
        return redirect()->route('admin.login');
    }
}
