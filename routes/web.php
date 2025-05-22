<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
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

// Route::get('/siswa', function() {

//     $nama = "charles agustian putra";
//     $nilai = [88,90,77,100];

//     return view('siswa', compact('nama','nilai'));
// });

// //tugas 1 route laravel 10
// Route::get('/biodata/{nama}/{jurusan}/{makanan}', function($nama,$jurusan,$makanan) {
//     return $nama . "<hr>" . $jurusan . "<hr>" . $makanan;
// });

// //tugas 2 route laravel 10
// Route::prefix('/hiburan')->group(function() {
//     Route::get('makanan', function() {
//         return "<h1>Daftar Makanan Enak</h1>";
//     });

//     Route::get('/minuman', function() {
//         return "<h1>Daftar Minuman Enak</h1>";
//     });

//     Route::get('/wisata', function() {
//         return "<h1>Daftar Wisata Seru</h1>";
//     });
// });






// Route::get('/siswa/{namasiswa}/{nilaisiswa}/{gurukelas}', function($namasiswa,$nilaisiswa,$gurukelas) {
//     $nama =  $namasiswa;
//     $nilai = $nilaisiswa;
//     $guru = $gurukelas;

//     return view('siswa', compact('nama','nilai','guru'));
// });


// Route::get('/siswa/{namasiswa}/{nilaisiswa}', function($namasiswa,$nilaisiswa) {
//     return view('siswa', compact('namasiswa','nilaisiswa'));
// });