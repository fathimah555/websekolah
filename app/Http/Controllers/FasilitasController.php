<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        // Mengambil semua data fasilitas dari database
        $fasilitas = Fasilitas::all(); // Variabel sudah benar
        // Mengembalikan tampilan dengan data fasilitas
        return view('fasilitas.index', compact('fasilitas')); // Mengirimkan data ke view
    }

    public function create()
    {
        return view('fasilitas.create', ['isEdit' => false]); // Menampilkan halaman create
    }

    public function store(Request $request)
    {
        // Menyimpan data fasilitas ke database
        Fasilitas::create($request->all());

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data fasilitas berdasarkan id
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', ['fasilitas' => $fasilitas]); // Mengirimkan data ke halaman edit
    }

    public function update(Request $request, $id)
    {
        // Mengambil data fasilitas berdasarkan id
        $fasilitas = Fasilitas::findOrFail($id);
        if($request->hasFile('gambar')){
            // Mengambil nama gambar asli
            $image = $request->gambar->getClientOriginalName();
            // Memindahkan gambar ke folder assets/images
            $request->gambar->move(public_path('assets/images'), $image);
        }

        // Update data fasilitas dengan input dari request
        $fasilitas->update($request->all());
        // Jika ada gambar baru, simpan nama gambar
        $fasilitas->gambar = $image ?? $fasilitas->gambar;
        $fasilitas->save();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Menghapus data fasilitas berdasarkan id
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus');
    }
}
