<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = 'visi-_misis';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'title',
        'visi',
        'misi',
        'deskripsi',
    ];
}
