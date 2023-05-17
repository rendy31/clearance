<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('dashbard_admin');
            } elseif ($user->level == 'operator') {
                $request->session()->regenerate();
                return redirect()->intended('dashbard_operator');
            } elseif ($user->level == 'mahasiswa') {
                $request->session()->regenerate();
                return redirect()->intended('dashbard_operator');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
}
