<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Guru; // Import model Guru
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Hapus middleware ini agar semua orang bisa mengakses halaman home
        // $this->middleware('auth'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil semua data berita
        $news = News::all();

        // Mengambil data guru (misalnya hanya 3 guru)
        $gurus = Guru::take(3)->get(); // Ambil 3 guru untuk ditampilkan

        // Mengembalikan tampilan home dengan data berita dan guru
        return view('home', compact('news', 'gurus'));
    }
}
