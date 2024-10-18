<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all(); // Ambil semua data dari tabel fasilitas
        return view('fasilitas.index', compact('fasilitas'));
    }
}
