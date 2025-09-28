<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        $gurus = Guru::all(); // Mengambil semua data guru
        return view('guru.index', compact('gurus')); // Kirim ke view
    }

    // Menampilkan form tambah guru
    public function create()
    {
        return view('guru.create', ['isEdit' => false]);
    }

    // Menyimpan data guru
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
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/images'), $imageName);
        $path = 'assets/images/' . $imageName;
    }

    // Menyimpan data guru ke database
    $guru = Guru::create([
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'tipe' => $request->tipe,
        'gambar' => $path,
    ]);

    // Redirect setelah berhasil menambah data
    if ($guru) {
        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    } else {
        return redirect()->route('guru.create')->with('error', 'Terjadi kesalahan saat menambahkan guru.');
    }
}


    // Menampilkan form untuk edit data guru
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', ['guru' => $guru]);
    }

    // Mengupdate data guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'tipe' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Inisialisasi variabel $image dengan gambar lama
        $image = $guru->gambar;

        if ($request->hasFile('gambar')) {
            // Jika ada gambar baru, simpan gambar tersebut
            $imageName = time() . '.' . $request->gambar->extension(); // Nama file unik
            $request->gambar->move(public_path('assets/images'), $imageName); // Simpan di public/assets/images
            $image = 'assets/images/' . $imageName; // Update path gambar baru
        }

        // Update data guru, kecuali gambar
        $guru->update($request->except('gambar')); 

        // Simpan gambar baru jika ada
        $guru->gambar = $image; 
        $guru->save(); // Simpan perubahan

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }

    // Menghapus data guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}