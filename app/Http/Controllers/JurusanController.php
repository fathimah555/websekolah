<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        // Mengambil semua data jurusan dari database
        $jurusan = Jurusan::all();
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
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Menyimpan data jurusan
    $jurusan = new Jurusan();
    $jurusan->nama = $validatedData['nama'];
    $jurusan->deskripsi = $validatedData['deskripsi'];

    // Mengupload gambar jika ada
    if ($request->hasFile('gambar')) {
        // Ambil nama file asli dan ubah jika perlu
        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Simpan gambar ke folder public/assets/images
        $image->move(public_path('assets/images'), $imageName);

        // Simpan nama gambar ke database
        $jurusan->gambar = $imageName;
    }

    // Simpan jurusan
    $jurusan->save();

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
            'nama' => 'required|string|max:255',
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
