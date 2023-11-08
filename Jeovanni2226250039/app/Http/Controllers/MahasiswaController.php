<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq()
    {

        //single assignment
        // $Mahasiswa = new Mahasiswa();
        // $Mahasiswa->npm = '2226250014';
        // $Mahasiswa->nama = 'Jennifer Velensia Santoti';
        // $Mahasiswa->tempat_lahir = 'Palembang';
        // $Mahasiswa->tanggal_lahir = '2004-06-14';  //date("Y-m-d) - > untuk tanggal hari ini
        // $Mahasiswa->save();


        //Mass Assignment
        $mahasiswa = Mahasiswa::insert(
            [
                'nama' => 'Jeovanni',
                'npm' => '2226250039',
                'tempat_lahir' => 'Palembang',
                'tanggal_lahir' => date("Y-m-d"),
                'prodi_id' => '1'
            ],
            [
                'nama' => 'Intan',
                'npm' => '2226250089',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => date("Y-m-d"),
                'prodi_id' => '2'
            ]
        );
        dump($mahasiswa);
    }

    public function updateElq()
    {
        $Mahasiswa = Mahasiswa::where('npm', '2226250039')->first(); //cari data
        //tabel mahasiswa berdasarkan npm
        $Mahasiswa->nama = "Jeovanni Wong";
        $Mahasiswa->save();
        dump($Mahasiswa);
    }

    public function deleteElq()
    {
        $Mahasiswa = Mahasiswa::where('npm', '2226250089'); //cari data
        $Mahasiswa->delete();
        dump($Mahasiswa);
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        //dump($allmahasiswa);
        return view("mahasiswa.index", ["allmahasiswa" => $mahasiswa, "kampus" => $kampus]);
    }

    public function allJoinElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::has('prodi')->get();
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus' => $kampus]);
    }
}
