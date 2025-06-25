<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Mahasiswa extends Model
{
    protected $table ='Mahasiswa';
    protected $fillable = ['nim','nama_lengkap', 'jurusan', 'fakultas', 'jenis_kelamin','alamat','email','angkatan'];

}
