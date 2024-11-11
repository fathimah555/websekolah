<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Model untuk manajemen berita
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Tampilkan formulir login admin.
     *
     * @return \Illuminate\View\View
     */

     public function __construct()
     {
         $this->middleware('auth')->except(['showLoginForm', 'login']);
     }
     

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (RateLimiter::tooManyAttempts('login:' . $request->ip(), 3)) {
            return back()->with('error', 'silahkan tunggu 1 menit');
        }
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.settings.index'); // Ganti ke route dashboard admin
        }
    
        RateLimiter::hit('login:' . $request->ip(), 60); // Memperbarui hit rate limiter
        
        return back()->with('error', 'Email atau password salah');
    
    }
    
    public function dashboard()
    {
        $news = News::all();
        return view('admin.dashboard', compact('news'));
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image'
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $news->image = $path;
        }

        $news->save();

        return redirect()->route('admin.dashboard')->with('success', 'Berita ditambahkan.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image'
        ]);

        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->content = $request->content;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $news->image = $path;
        }

        $news->save();

        return redirect()->route('admin.dashboard')->with('success', 'Berita diperbarui.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Berita dihapus.');
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.settings', compact('users'));
    }
    
}
