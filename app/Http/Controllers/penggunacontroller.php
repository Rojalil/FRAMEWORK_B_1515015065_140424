<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari penggunacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function kurang()
    {
    	return $this->hapus();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'Rojalil';
    	$pengguna->password = 'jalil';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
    public function hapus()
    {
    	$pengguna = new pengguna();
    	$pengguna = pengguna::where('username','jon doe');
    	$pengguna->delete();
    }
}