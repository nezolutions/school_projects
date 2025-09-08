<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageDev extends Controller
{
    public function index() {
        return view('halaman.developer');
    }
}
