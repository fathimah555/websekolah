<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        // Mengambil semua data berita dari database
        $berita = Berita::all();
        
        // Mengembalikan tampilan dengan data berita
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        return view('berita.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan gambar jika ada
        $image = null;
        if ($request->hasFile('gambar')) {
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
        }

        // Menyimpan berita
        $berita = new Berita($request->all());
        $berita->gambar = $image; // Set gambar
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', ['berita' => $berita]);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        // Validasi data yang diterima
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Inisialisasi variabel gambar
        $image = $berita->gambar; // Simpan gambar lama jika tidak ada gambar baru

        if ($request->hasFile('gambar')) {
            // Jika ada gambar baru, simpan gambar tersebut
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
        }

        // Update data berita
        $berita->update($request->except('gambar')); // Update semua kecuali gambar
        $berita->gambar = $image; // Set gambar baru atau lama
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
