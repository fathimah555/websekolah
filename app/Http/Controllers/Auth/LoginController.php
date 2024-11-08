<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use Illuminate\Auth\Events\Login;
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

            // Cek apakah user memiliki role admin atau operator
            if ($user->hasRole('admin')) {
                // Redirect ke dashboard admin
                return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!');
            } elseif ($user->hasRole('operator')) {
                // Redirect ke dashboard operator
                return redirect()->route('operator.dashboard')->with('success', 'Selamat datang, Operator!');
            } else {
                // Jika bukan admin atau operator, redirect ke halaman home dengan pesan info
                return redirect()->intended('/home')->with('info', 'Anda tidak memiliki akses ke halaman ini.');
            }
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        // Cek role setelah login
        if ($user->role != 'admin') {
            // Logout pengguna yang tidak memiliki role admin
            Auth::logout(); 
            return redirect()->route('home')->with('error', 'Anda bukan admin!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
