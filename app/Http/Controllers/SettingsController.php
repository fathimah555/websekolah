<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role; // Pastikan Role model sudah di-import

class SettingsController extends Controller
{
    /**
     * Menampilkan halaman pengaturan admin jika pengguna memiliki role 'admin'
     */
    public function index()
    {
        $user = Auth()->user();

        // Cek apakah pengguna berhasil login
        if (!$user) {
            return redirect()->route('login');
        }

        // Jika pengguna adalah admin utama, tampilkan semua user
        if ($user->email === 'admin@gmail.com') {
            // Mengambil semua pengguna yang terbaru
            $users = User::all(); 
        } else {
            // Jika bukan admin utama, hanya tampilkan data user yang login
            $users = User::where('id', $user->id)->get();
        }

        // Pastikan data 'users' dikirimkan ke view
        return view('admin.settings.index', compact('users')); // Kirimkan data pengguna ke view
    }

    /**
     * Menampilkan halaman form untuk menambahkan pengguna baru
     */
    public function create()
    {
    $user = auth()->user();
    
    // Pastikan hanya admin utama yang bisa menambah pengguna baru
    if ($user->email !== 'admin@gmail.com') {
        return redirect()->route('admin.settings.index')->with('error', 'Akses ditolak!');
    }

    $roles = Role::all(); // Mengambil semua role untuk dipilih ketika membuat pengguna baru
    return view('admin.settings.create', compact('roles'));
    }


    /**
     * Menampilkan halaman form untuk mengedit pengguna yang sudah ada
     */
    public function edit($id)
    {
    $user = User::find($id);

    // Pastikan pengguna ditemukan
    if (!$user) {
        return redirect()->route('admin.settings.index')->with('error', 'Pengguna tidak ditemukan!');
    }

    $roles = Role::all(); // Ambil semua role
    return view('admin.settings.edit', compact('user', 'roles'));
    }

    /**
     * Menyimpan pengguna baru
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Membuat pengguna baru
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);
    
        // Menambahkan role untuk pengguna
        $user->roles()->attach($request->role_id);
    
        // Kembalikan data pengguna baru ke dalam format JSON
        return response()->json([
            'success' => 'Pengguna berhasil ditambahkan!',
            'user' => $user,
        ]);
    }
    

    /**
     * Update pengaturan admin8
     */
    public function update(Request $request, $id)
    {
        // Validasi input, kecuali untuk pengguna yang sedang diperbarui
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id, // Menghindari duplikat untuk email yang sama
            'role_id' => 'required|exists:roles,id',
        ]);

        // Ambil pengguna berdasarkan ID
        $user = User::find($id);

        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect()->route('admin.settings.index')->with('error', 'Pengguna tidak ditemukan');
        }

        // Perbarui data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Update relasi role untuk pengguna
        $user->roles()->sync([$request->role_id]);

        // Kembalikan ke halaman pengaturan admin dengan pesan sukses
        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui');
    }

    /**
     * Hapus pengguna
     */
    public function destroy($id)
    {
        $user = User::find($id);
    
        // Periksa apakah pengguna ditemukan
        if ($user) {
            // Jangan hapus admin utama
            if ($user->email === 'admin@gmail.com') {
                return redirect()->route('admin.settings.index')->with('error', 'Admin utama tidak dapat dihapus!');
            }
    
            // Hapus pengguna
            $user->delete();
    
            // Redirect kembali ke halaman pengaturan dengan pesan sukses
            return redirect()->route('admin.settings.index')->with('success', 'Pengguna berhasil dihapus');
        }
    
        // Jika pengguna tidak ditemukan, tampilkan pesan kesalahan
        return redirect()->route('admin.settings.index')->with('error ', 'Pengguan tidak Ditemukan');
    }
}
