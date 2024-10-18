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

    public function create()
    {
        return view('prestasi.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        Prestasi::create($request->all());

        return redirect()->route('prestasi.index')->with('success', 'prestasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', ['prestasi' => $prestasi]);
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->update($request->all());

        return redirect()->route('prestasi.index')->with('success', 'prestasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'prestasi berhasil dihapus');
    }
}
