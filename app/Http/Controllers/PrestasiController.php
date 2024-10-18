<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all(); // Mengambil semua data prestasi
        return view('prestasi.index', compact('prestasis')); // Pastikan 'prestasis' sesuai dengan variabel di view
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id); // Ambil prestasi berdasarkan ID
        return view('prestasi.show', compact('prestasi')); // Ganti dengan view yang sesuai
    }
}
