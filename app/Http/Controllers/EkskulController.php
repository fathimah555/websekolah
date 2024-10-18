<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Event;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        // Mengambil semua data ekskul dari database
        $ekskul = Ekskul::all(); // Variabel sudah benar
        // Mengembalikan tampilan dengan data ekskul
        return view('ekskul.index', compact('ekskul')); // Sekarang sudah benar
    }

    public function create()
    {
        return view('ekskul.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        Ekskul::create($request->all());

        return redirect()->route('ekskul.index')->with('success', 'ekskul berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('ekskul.edit', ['ekskul' => $ekskul]);
    }

    public function update(Request $request, $id)
    {
        $ekskul = Ekskul::findOrFail($id);
        $ekskul->update($request->all());

        return redirect()->route('ekskul.index')->with('success', 'ekskul berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        $ekskul->delete();

        return redirect()->route('ekskul.index')->with('success', 'ekskul berhasil dihapus');
    }
}