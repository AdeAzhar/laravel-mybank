<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewLoginPage()
    {
        return view('auth.login');
    }

    public function viewRegisterPage()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
        [
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak sesuai',
            'password.required' => 'Password wajib diisi'
        ]);

        if(Auth::attempt($credentials, $request->filled('remember')))
        {
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin')
            {
                return redirect()->intended('/home-admin');
            }
            return redirect()->intended('/home-nasabah')->with('success', 'Anda berhasil login');

        }
        return redirect('/login')->withErrors(['email' => 'Email atau password salah']);
    }

    public function register(Request $request)
    {
        $request->validate(
        [
            'username' => 'required|string|max:255|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ],
        [
            'username.unique' => 'Username sudah digunakan',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok'
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect('/home-nasabah')->with('success', 'Registrasi berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Anda telah berhasil logout');
    }
}
