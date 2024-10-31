<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita; // Pastikan Anda mengimpor model Berita

class OperatorController extends Controller
{
    public function __construct()
    {
        // Menggunakan middleware untuk guard operator
        $this->middleware('auth:operator')->except(['showLoginForm', 'login']);
    }

    public function showLoginForm()
    {
        return view('operator.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('operator')->attempt($credentials)) {
            return redirect()->route('berita.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('operator')->logout(); // Logout dengan guard 'operator'
        return redirect()->route('operator.login');
    }

    public function create()
    {
        return view('operator.create'); // Ganti dengan view yang sesuai
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = new Berita();
        $berita->title = $request->title;
        $berita->description = $request->description;

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $berita->gambar = $path;
        }

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('operator.edit', compact('berita')); // Ganti dengan view yang sesuai
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->title = $request->title;
        $berita->description = $request->description;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $berita->gambar = $path;
        }

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
    
}
