<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello Dari dosencontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Joni';
        $dosen->nip = '5';
    	$dosen->alamat = 'Ks.Tubun';
    	$dosen->pengguna_id ='1';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
