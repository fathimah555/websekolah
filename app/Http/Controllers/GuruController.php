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

    public function create()
    {
        return view('guru.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'tipe' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan gambar jika ada
        $path = null;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension(); // Nama file unik
            $request->gambar->move(public_path('assets/images'), $imageName); // Simpan di public/assets/images
            $path = 'assets/images/' . $imageName; // Path untuk disimpan di database
        }

        // Menyimpan data guru
        Guru::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tipe' => $request->tipe,
            'gambar' => $path, // Simpan path gambar
        ]);

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', ['guru' => $guru]);
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        
        // Inisialisasi variabel $image dengan gambar lama
        $image = $guru->gambar;

        if ($request->hasFile('gambar')) {
            // Jika ada gambar baru, simpan gambar tersebut
            $imageName = time() . '.' . $request->gambar->extension(); // Nama file unik
            $request->gambar->move(public_path('assets/images'), $imageName); // Simpan di public/assets/images
            $image = 'assets/images/' . $imageName; // Update path
        }

        // Update data guru, termasuk gambar baru jika ada
        $guru->update($request->except('gambar')); // Update data selain gambar
        $guru->gambar = $image; // Set gambar baru
        $guru->save(); // Simpan perubahan

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}
