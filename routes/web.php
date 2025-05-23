<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('/absens',AbsenController::class);


//route meeting humma
Route::get('/meeting/{isiberita}', [BeritaController::class,'index']);


Route::get('/', function () {
    return view('halaman utama.welcome');
});


//route regis
Route::get('/regis',[AuthController::class, 'Showregis'])->name('register');


//route login 
Route::get('/login',[AuthController::class,'Showlogin'])->name('login');



//route halaman utama
Route::get('/dashboard', [WelcomeController::class, 'Showdashboard'])->name('dashboard');


//route tugas controller 1
// Route::get('/perpustakaan',[PageController::class,'index']);
Route::get('/isiperpustakaan',[PageController::class,'tampil']);