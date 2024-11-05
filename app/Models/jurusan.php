<?php

namespace App\Models\Jurusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusan';

    protected $fillable = ['nama', 'deskripsi', 'gambar'];
}
