<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        // Mengambil semua data prestasi dari database
        $prestasis = Prestasi::all();
        // Mengembalikan tampilan dengan data prestasi
        return view('prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('prestasi.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $imageName = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $imageName);
            $validated['gambar'] = $imageName; // Tambahkan nama file gambar ke data validasi
        }

        // Simpan data ke database
        Prestasi::create($validated);

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil ditambahkan');
    }

        public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', ['prestasi' => $prestasi]);
    }
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        if($request->hasFile('gambar')){
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
        }
        $prestasi->update($request->all());
        $prestasi->gambar = $image;
        $prestasi->save();

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil dihapus');
    }
}