<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all(); // Ambil semua data ekskul
        return view('ekskul.index', compact('ekskul')); // Pastikan ini sesuai dengan nama file tampilan Anda
    }
    

    public function create()
    {
        return view('ekskul.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
            $request->merge(['gambar' => $image]); // Gabungkan dengan data yang akan disimpan
        }

        Ekskul::create($request->all());

        return redirect()->route('Ekskul.index')->with('success', 'Ekskul berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('ekskul.edit', compact('ekskul'));
    }
    
    public function update(Request $request, $id)
    {
        $ekskul = Ekskul::findOrFail($id);
        
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Simpan gambar lama jika tidak ada gambar baru
        $image = $ekskul->gambar;
    
        if ($request->hasFile('gambar')) {
            // Jika ada gambar baru, simpan gambar tersebut
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
        }
    
        // Update data Ekskul
        $ekskul->update($request->except('gambar'));
        $ekskul->gambar = $image; // Set gambar, bisa gambar baru atau lama
        $ekskul->save();
    
        return redirect()->route('ekskul.index')->with('success', 'Ekskul berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $Ekskul = Ekskul::findOrFail($id);
        $Ekskul->delete();

        return redirect()->route('Ekskul.index')->with('success', 'Ekskul berhasil dihapus');
    }

    // Menambahkan metode tsm untuk detail Ekskul
    public function tsm()
    {
        return view('Ekskul.tsm');                  
    }

    public function tkj()
    {
        return view('Ekskul.tkj');
    }

    public function akuntansi()
    {
        return view('Ekskul.akuntansi');
    }
}
