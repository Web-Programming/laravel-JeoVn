<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illmuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq(){
        $mahasiswa = new Mahasiswa; // instansi class mahasiswa
        $mahasiswa->npm = '2226250039'; // isi property
        $mahasiswa->nama = 'Jeovanni Wong';
        $mahasiswa->tempat_lahir = 'Palembang';
        $mahasiswa->tanggal_lahir = '2006-01-03';
        $mahasiswa->save(); // menyimpan data ke tabel mahasiswas
        dump($mahasiswa); // melihat isi $mahasiswa
    }
     public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250039')->first(); // cari data tabel mahasiswa berdasarkan npm
        $mahasiswa->nama = 'intan';
        $mahasiswa->save();
        dump($mahasiswa);
    }
    public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250039')->first(); // cari data tabel mahasiswa berdasarkan npm
        $mahasiswa->delete();
        dump($mahasiswa);
    }
      public function selectElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',['allmahasiswa'=> $mahasiswa, 'kampus'=>$kampus]);
    }
}
