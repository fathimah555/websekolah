<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

            // Cek apakah user memiliki role 'admin' atau 'operator'
            if ($user->hasRole('admin')) {
                // Redirect ke halaman dashboard admin
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

    /**
     * Setelah login berhasil, cek apakah user memiliki role yang tepat.
     * Jika bukan admin, logout dan redirect ke halaman home.
     */
    protected function authenticated(Request $request, $user)
    {
        // Cek role pengguna setelah login
        if (!$user->hasRole('admin')) {
            // Logout pengguna yang tidak memiliki role 'admin'
            Auth::logout();
            return redirect()->route('home')->with('error', 'Anda bukan admin!');
        }

        // Jika user adalah admin, lanjutkan ke halaman dashboard admin
        return redirect()->route('admin.index')->with('success', 'Selamat datang, Admin!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function Notification(Request $request)
    {
        $maxAttempts = 3; // Maksimum percobaan login
    $lockoutTime = 60; // Waktu tunggu dalam detik (1 menit)

    // Cek apakah waktu tunggu sudah habis
    if (Session::has('login_attempt_time') && time() < Session::get('login_attempt_time')) {
        return back()->with('lockout', true);
    }

    // Percobaan login
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        // Reset session ketika login berhasil
        Session::forget(['login_attempts', 'login_attempt_time']);
        return redirect()->intended('dashboard'); // Atur sesuai route tujuan setelah login
    } else {
        // Jika login gagal, tambahkan percobaan login
        $attempts = Session::get('login_attempts', 0) + 1;
        Session::put('login_attempts', $attempts);

        if ($attempts >= $maxAttempts) {
            Session::put('login_attempt_time', time() + $lockoutTime); // Set waktu tunggu 1 menit
            Session::forget('login_attempts');
            return back()->with('lockout', true);
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
    }
}
  