<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    
    public function mahasiswa() // membuat fungsi dengan nama mahasiswa
    {
    	return $this->hasOne(mahasiswa::class);
    	//sintaks ini menghubungkan antara model mahasiswa dengan model pengguna, yang artinya kita bisa mengakses model mahasiswa melalui model mpengguna. sintaks hasOne sendiri menandakan hubungan relasinya adalah one to one
    }
    public function dosen() //membuat fungs dengan nama dosen
    {
    	return $this->hasOne(dosen::class);
    	//sintaks ini menghubungkan antara model dosen dengan model pengguna, yang artinya kita bisa mengakses isi dari model dosen melalui model pengguna. sintaks hasOne sendiri menandakan hubungan relasinya adalah one to one
    }
    public function peran() //membuat fungsi dengan nama peran
    	return $this->belongsToMany(peran::class);
    	//sintaks ini menghubungkan antara model pengguna dengan model peran, jadi kita bisa mengakses isi model peran melalui model pengguna. sintaks belongsToMany sendiri menandakan hubungan relasinya adalah many to many
    }
    
}
