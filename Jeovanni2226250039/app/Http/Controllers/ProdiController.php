<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        $kampus = "Universitas Multi Data Palembang";
        return view('prodi.index')->with('kampus',$kampus);
    }
    public function allJoinFacade(){
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::select('select mahasiswas.*, prodis.nama as nama_prodi from prodis, mahasiswas
        where prodis.id=mahasiswas.prodi_id');
        return view ('prodi.index', ['allmahasiswaprodi'=> $result, 'kampus'=>$kampus]);
    }
}
