<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahcontroller extends Controller
{
    //
    public function awal()
    {
    	return "hello dari matakuliahcontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'FRAMEWORK';
    	$matakuliah->keterangan = 'Mempelajari pembuatan web';
    	$matakuliah->save();
    }
}
