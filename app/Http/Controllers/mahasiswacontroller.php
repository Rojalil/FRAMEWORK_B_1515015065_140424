<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswacontroller";
    }
     public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nim = '65';
    	$mahasiswa->nama = 'Rojalil';
    	$mahasiswa->alamat = 'Ks.Tubun';
    	$mahasiswa->pengguna_id ='1';
    	$mahasiswa->save();
    	return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::all();
        //dd($mahasiswa);
        foreach ($mahasiswa as $mhs) {
            # code...
        echo "Nama : ".$mhs->nama;
        echo "<br>";
        echo "Pengguna_id : ".$mhs->pengguna->username;
        echo "<br>";
    }
    }
}