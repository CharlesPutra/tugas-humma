<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Showdashboard() {
        return view('halaman utama.dashboard');
    }
}
