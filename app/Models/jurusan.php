<?php

namespace App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
   
    protected $fillable = ['nama', 'deskripsi', 'gambar'];
}
