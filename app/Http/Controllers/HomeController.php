<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\News;
use App\Models\Guru; // Import model Guru
use App\Models\Event;
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
        // Mengambil 6 berita terbaru
        $berita = Berita::latest()->take(6)->get();
    
        // Mengambil 3 guru untuk ditampilkan
        $gurus = Guru::take(3)->get();
    
        // Mengambil 3 event terbaru
        $events = Event::latest()->take(3)->get();
    
        // Mengirim semua data ke view
        return view('home', compact('berita', 'gurus', 'events'));
    }
        

}
