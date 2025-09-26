<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{
    public function index()
    {
        $gambars = Gambar::all();
        return view('upload', compact('gambars'));
    }

    public function form()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Simpan file dengan nama custom (misalnya pakai timestamp)
        $gambarFile = $request->file('gambar');
        $namaFile = time() . '.' . $gambarFile->getClientOriginalExtension();
        $gambarFile->storeAs('gambar', $namaFile, 'public'); // <-- Simpan ke storage/app/public/gambar

        Gambar::create([
            'title' => $validated['title'],
            'date' => $validated['date'],
            'gambar' => $namaFile // hanya nama file, bukan path
        ]);

        return redirect()->back()->with('success', 'Gambar berhasil diupload!');
    }
}
