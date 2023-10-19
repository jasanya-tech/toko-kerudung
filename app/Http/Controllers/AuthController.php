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

    public function loginProcess(Request $request)
    {
        $message = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($message)) {
            $request->session()->regenerate();
            return redirect()->route('product')->with(['success' => 'selamat datang user']);
        }
        return redirect()->route('auth.login')->with('errors', 'Email atau password salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $message = $request->validate([
            'email' => 'email:rfc,dns|unique:users,email',
            'name' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'email' => $message['email'],
            'name' => $message['name'],
            'password' => bcrypt($message['password']),
        ]);

        Auth::login($user);
        return redirect()->route('landingpage')->with(['success' => 'selamat datang user']);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerate();
        return redirect('/');
    }
}
