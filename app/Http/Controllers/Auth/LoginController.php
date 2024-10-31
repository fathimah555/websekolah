<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Default redirect after login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Coba login dengan kredensial
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Cek role apakah admin atau operator
            if ($user->role && $user->role->name === 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!');
            } elseif ($user->role && $user->role->name === 'operator') {
                // Jika role adalah operator, redirect ke halaman berita operator
                return redirect()->route('berita.index')->with('success', 'Selamat datang, Operator!');
            }
    
            // Jika bukan admin atau operator, redirect ke halaman home
            return redirect()->intended('/home')->with('info', 'Anda tidak memiliki akses ke halaman ini.');
        }
    
        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
        ]);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
