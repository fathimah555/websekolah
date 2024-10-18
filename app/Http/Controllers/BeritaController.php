<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Ganti dengan model yang sesuai jika perlu
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all(); // Ambil semua berita dari database
        return view('berita.index', compact('berita')); // Kirim data ke view
    }
}