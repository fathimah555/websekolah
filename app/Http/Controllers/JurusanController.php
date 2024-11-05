<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        // Mengambil semua data jurusan dari database
        $jurusan = Jurusan::all();
        // Mengembalikan tampilan dengan data jurusan
        return view('jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Simpan data jurusan
        Jurusan::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data jurusan berdasarkan ID
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', ['jurusan' => $jurusan, 'isEdit' => true]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Mencari data jurusan berdasarkan ID
        $jurusan = Jurusan::findOrFail($id);

        // Jika ada gambar baru, upload gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($jurusan->gambar) {
                $oldImagePath = public_path('assets/images/') . $jurusan->gambar;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus gambar lama
                }
            }

            // Mengambil nama file gambar dan menyimpannya
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
            $validatedData['gambar'] = $image; // Menyimpan nama gambar baru
        }

        // Mengupdate data jurusan
        $jurusan->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mengambil data jurusan berdasarkan ID
        $jurusan = Jurusan::findOrFail($id);

        // Hapus gambar jika ada
        if ($jurusan->gambar) {
            $imagePath = public_path('assets/images/') . $jurusan->gambar;
            if (file_exists($imagePath)) {
                unlink($imagePath); // Menghapus gambar dari direktori
            }
        }

        // Menghapus data jurusan
        $jurusan->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }

    // Menambahkan metode untuk detail jurusan
    public function tsm()
    {
        return view('jurusan.tsm'); // Halaman detail TSM
    }

    public function tkj()
    {
        return view('jurusan.tkj'); // Halaman detail TKJ
    }

    public function akuntansi()
    {
        return view('jurusan.akuntansi'); // Halaman detail Akuntansi
    }
}
