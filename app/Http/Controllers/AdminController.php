<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Model untuk manajemen berita
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function dashboard()
    {
        $news = News::all();
        return view('admin.dashboard', compact('news'));
    }

    public function create()
    {
        return view('admin.create');
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
}
