<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
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

//Buat route ke halaman profil
Route::get('/profil', function () {
    return view('profil');
});

// //route dengan parameter {wajib}
// Route::get('/mahasiswa/{nama}', function ($nama = "Jeovanni") {
//     echo "<h2>Halo Nama Saya $nama</h2>";
// });

//route dengan parameter {tidak wajib}
Route::get('/mahasiswa2/{nama?}', function ($nama = "Jeovanni") {
    echo "<h2>Halo Nama Saya $nama</h2>";
});

//route dengan parameter > 1
Route::get('/profil/{nama?}/{pekerjaan?}', function ($nama = "Jeovanni", $pekerjaan = "Mahasiswa") {
    echo "<h2>Halo Nama Saya $nama. Saya adalah $pekerjaan</h2>";
});

//Redirect dan Named Route
Route::get("/hubungi", function (){
    echo "<h1>Hubungi Kami<h1>";
})->name("call");  //named route

Route::redirect("/contact", "/hubungi");

Route::get('/halo', function () {
    echo "<a href = '". route('call') . "'>" . route('call'). "</a>";
});

//Route Group

Route::prefix("/dosen")->group(function(){

Route::get('/jadwal', function () {
    echo "<h2>Jadwal Dosen</h2>";
});
Route::get('/materi', function () {
    echo "<h2>Materi Perkuliahan</h2>";
});
//dan lain lain
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dosen/index', function () {
    return view('dosen.index');
});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer
    // dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer
    // dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
    // return view('fakultas.index')-> with("fakultas", ["Fakultas Ilmu Komputer
    // dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);
    //    $fakultas = [];
      $fakultas = ["Fakultas Ilmu Komputer
    dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
    $kampus = "Universitas Multi Data Palembang";
    return view('fakultas.index', compact ('fakultas', 'kampus'));
});

Route::get('/prodi', [ProdiController::class, 'index']);

Route::resource('/kurikulum', KurikulumController::class);

Route::apiResource('/dosen', DosenController::class);


Route:: get('/mahasiswa/insert', [MahasiswaController::class, 'insert']);
Route:: get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route:: get('/mahasiswa/delete', [MahasiswaController::class, 'delete']);
Route:: get('/mahasiswa/select', [MahasiswaController::class, 'select']);

Route:: get('/mahasiswa/insert-elq', [MahasiswaController::class, 'insertElq']);
Route:: get('/mahasiswa/update-elq', [MahasiswaController::class, 'updateElq']);
Route:: get('/mahasiswa/delete-elq', [MahasiswaController::class, 'deleteElq']);
Route:: get('/mahasiswa/select-elq', [MahasiswaController::class, 'selectElq']);
