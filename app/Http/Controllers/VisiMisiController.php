<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::all();
        return view('visimisi.index', compact('visimisi'));
    }

    public function create()
    {
        return view('visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        VisiMisi::create($request->all());

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        return view('visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $visimisi = VisiMisi::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        $visimisi->update($request->all());

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        $visimisi->delete();

        return redirect()->route('visimisi.index')->with('success', 'Visi Misi berhasil dihapus.');
    }
}
