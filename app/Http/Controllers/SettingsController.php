<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role; // Pastikan Role diimport

class SettingsController extends Controller
{
    /**
     * Menampilkan halaman pengaturan admin jika pengguna memiliki role 'admin'
     */
    public function index()
    {
        // Mendapatkan pengguna yang sedang login
        $user = auth()->user();
    
        // Cek apakah email dan role sesuai dengan admin utama
        if ($user->email === 'admin@gmail.com' && $user->is_superadmin) {
            // Jika pengguna adalah admin utama, tampilkan semua pengguna
            $users = User::all();
        } else {
            // Jika bukan, tampilkan hanya data diri pengguna itu sendiri
            $users = User::where('id', $user->id)->get();
        }
    
        return view('admin.settings.index', compact('users'));
    }
    
    

    /**
     * Menampilkan halaman form untuk menambahkan pengguna baru
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    public function edit($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        // Periksa apakah pengguna ditemukan
        if (!$user) {
            return redirect()->route('admin.settings.index')->with('error', 'Pengguna tidak ditemukan!');
        }

        // Kirim data pengguna ke view untuk form edit
        return view('admin.settings.edit', compact('user'));
    }

    /**
     * Menyimpan pengguna baru
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role_id' => 'required|exists:roles,id', // Pastikan role_id valid
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Menambahkan relasi role untuk pengguna
        $user->roles()->attach($validated['role_id']); // Menyimpan role untuk pengguna

        return redirect()->route('admin.settings.index')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    /**
     * Update pengaturan admin
     */
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Periksa apakah user adalah instance dari model User
        if ($user instanceof User) {
            // Perbarui data user
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }

        // Kembalikan ke halaman pengaturan admin dengan pesan sukses
        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui');
    }

    /**
     * Hapus pengguna
     */
    public function destroy($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        // Periksa apakah pengguna ditemukan
        if ($user) {
            // Hapus pengguna
            $user->delete();

            // Redirect kembali ke halaman pengaturan dengan pesan sukses
            return redirect()->route('admin.settings.index')->with('success', 'Pengguna berhasil dihapus');
        }

        // Jika pengguna tidak ditemukan, tampilkan pesan kesalahan
        return redirect()->route('admin.settings.index')->with('error', 'Pengguna tidak ditemukan');
    }
}
