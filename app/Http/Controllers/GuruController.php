<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        // Mengambil semua data guru dari database
        $gurus = Guru::all();
        // dd(Auth::user());
        // Mengembalikan tampilan dengan data guru
        return view('guru.index', compact('gurus'));
    }


    public function create()
    {
        return view('guru.create', ['isEdit' => false]);
    }

    public function store(Request $request)
    {
        Guru::create($request->all());

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
        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}

