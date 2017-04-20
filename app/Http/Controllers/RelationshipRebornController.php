<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

use App\matakuliah;

class RelationshipRebornController extends Controller
{
    public function ujihas()
    {
    	$data =dosen::has('dosen_matakuliah')->get();
    	dd($data);
    }

    public function ujidoesnthave()
    {
    	return dosen::doesnthave('dosen_matakuliah')->get();
    }

    public function ujimhs()
    {
    	return matakuliah::doesnthave('dosen_matakuliah')->get();
    }
}
