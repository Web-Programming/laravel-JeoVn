<?php

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

Route::get('/', function () {
    return view('welcome');
});

// buat route ke halaman profil 
Route::get('/', function () {
    return view('profil');
});

// route dengan parameter ( wajib)
Route::get("/mahasiswa/{nama}", function ($nama = "Jeo") {
   echo "<h1> Halo nama saya $nama</h1>";
});

// route dengan parameter ( tidak wajib)
Route::get("/mahasiswa2/{nama?}", function ($nama = "Jeo") {
   echo "<h1> Halo nama saya $nama</h1>";
});

// route dengan parameter >1
Route::get("/profil/{nama?}/{pekerjaan?}", function ($nama = "Jeo", $pekerjaan = "Mahasiswa") {
   echo "<h1> Halo nama saya $nama, saya adalah $pekerjaan</h1>";
});

//redirect
Route::get("/hubungi", function () {
   echo "<h1> Hubungi kami</h1>";
})->name("call"); // named route

Route::redirect("/contact","/hubungi");

Route::get("/halo", function () {
   echo "<a href='".route('call') . "'>". route('call'). "</a>";
});

Route::prefix("/dosen")->group(function(){
    Route::get("/jadwal", function(){
        echo "<h1> Jadwal Dosen </h1>";
    });
    Route::get("/materi", function(){
        echo "<h1> Materi Perkuliahan </h1>";
    });
    // dan lain-lain
});