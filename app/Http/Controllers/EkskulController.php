<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        // Mengambil semua data ekskul dari database
        $ekskul = Ekskul::all(); // Variabel sudah benar
        // Mengembalikan tampilan dengan data ekskul
        return view('ekskul.index', compact('ekskul')); // Sekarang sudah benar
    }
}