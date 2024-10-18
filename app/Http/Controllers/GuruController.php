<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        // Mengambil semua data guru dari database
        $gurus = Guru::all();
        // Mengembalikan tampilan dengan data guru
        return view('guru.index', compact('gurus'));
    }
}

