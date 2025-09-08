<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageAdmin extends Controller
{
    public function index() {
        $user = Auth::user();
        if ($user->level != 2) {
            return redirect()->intended('login');
        }

        return view('halaman.admin');
    }
}
