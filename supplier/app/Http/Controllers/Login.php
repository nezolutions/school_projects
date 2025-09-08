<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function user() {
        if ($user = Auth::user()) {
            if ($user->level == 1) {
                return redirect()->intended('developer');
            } else if ($user->level == 2) {
                return redirect()->intended('admin');
            }
        }

        return view('login');
    }

    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $cred = $request->only('username', 'password');
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 1) {
                return redirect()->intended('developer');
            } else if ($user->level == 2) {
                return redirect()->intended('admin');
            }
        }

        return back()->withErrors([
            'gagal' =>"Maaf, Username atau Password salah",
        ])->onlyInput('username');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}