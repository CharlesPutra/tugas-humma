<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index($isiberita){
        return view('Berita.index',['title' => '1 orang pria di gebukin warga karena maling sandal di masjid',
    'isiberita' => $isiberita]);
    }
}
