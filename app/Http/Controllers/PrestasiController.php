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
        Prestasi::create($request->all());

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