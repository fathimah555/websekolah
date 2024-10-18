<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PrestasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('');
});

// Authentication routes
Auth::routes();

// Home route for the application
Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin routesa
// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin login
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('submit');
    
    // Admin dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth:admin');

    // Menampilkan form tambah berita
    Route::get('/create', [AdminController::class, 'create'])->name('create')->middleware('auth:admin');
 
    // Menyimpan berita baru
    Route::post('/store', [AdminController::class, 'store'])->name('store')->middleware('auth:admin');

    // Menampilkan form edit berita
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit')->middleware('auth:admin');

    // Memperbarui berita
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update')->middleware('auth:admin');

    // Menghapus berita
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy')->middleware('auth:admin');
    
    // Admin logout
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});


// CRUD routes
Route::resource('news', NewsController::class)->middleware('auth:admin');

// Jurusan routes
Route::get('/jurusan/tsm', function () {
    return view('jurusan.tsm'); // Halaman Rekayasa teknik mesin motor 
});

Route::get('/jurusan/akuntansi', function () {
    return view('jurusan.akuntansi'); // Halaman Akuntansi
});


Route::get('/jurusan/tkj', function () {
    return view('jurusan.tkj'); // Halaman Manajemen tenik kabel dan jaringan 
});


// Route::get('/jurusan/bisnis-retail', function () {
//     return view('jurusan.bisnis-retail'); // Halaman Bisnis Retail
// });

Route::get('/jurusan/visi-misi', function () {
    return view('jurusan.visi-misi'); // Halaman visi misi
});

// Guru routes

Route::prefix('guru')->name('guru.')->group(function () {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    // Route::get('/create', [GuruController::class, 'create'])->name('create');
    // Route::post('/', [GuruController::class, 'store'])->name('store');
    // Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [GuruController::class, 'update'])->name('update');
    // Route::delete('/destroy/{id}', [GuruController::class, 'destroy'])->name('destroy');
});


// prestasi
// Route::resource('prestasi', PrestasiController::class);

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'show'])->name('event.show'); // Rute untuk detail event


Route::get('/prestasis', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasis/{id}', [PrestasiController::class, 'show'])->name('prestasi.show'); 
// Rute untuk detail event
Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul.index');

Route::get('/berita/kegiatan1', function () {
    return view('berita.kegiatan1');
});

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// routes/web.php
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index'); // Akses tanpa login

    Route::get('/jurusan/selayang-pandang', function () {
        return view('jurusan.selayang-pandang'); // Pastikan nama view sesuai
    });


    Route::get('/jurusan/sambutan-kepalasekolah', function () {
        return view('jurusan.sambutan-kepalasekolah');
    });
    








