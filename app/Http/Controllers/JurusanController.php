<?php

namespace App\Http\Controllers;

use App\Models\Jurusan; // Pastikan model Jurusan sudah ada
use Illuminate\Http\Request;

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
        Jurusan::create($request->all());


        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', ['jurusan' => $jurusan]);
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        if($request->hasFile('gambar')){
            $image = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('assets/images'), $image);
        }
        $jurusan->update($request->all());
        $jurusan->gambar = $image;
        $jurusan->save();


        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }

    // Menambahkan metode tsm untuk detail jurusan
    public function tsm()
    {
        return view('jurusan.tsm');
    }
    public function tkj()
    {
        return view('jurusan.tkj');
    }
    public function akuntansi()
    {
        return view('jurusan.akuntansi');
    }

    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }
    
}
