<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('siswa');
    }

    public function tampil(){
        $dataperpus = ["Malin Kundang","Bawang Merah Dan Bawang Putih","God Explained in a Taxi Ride","Laskar Pelangi"];
        return view('siswa')->with('perpus',$dataperpus);
    }
}
