<?php

// use App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
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

// Admin routes

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

// Jurusan routes

Route::prefix('jurusan')->name('jurusan.')->group(function () {
    // Route::get('/', [JurusanController::class, 'index'])->name('index');
    Route::get('/create', [JurusanController::class, 'create'])->name('create');
    Route::post('/', [JurusanController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [JurusanController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [JurusanController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [JurusanController::class, 'destroy'])->name('destroy');
    Route::get('/tsm', function () {
        return view('jurusan.tsm'); // Halaman Rekayasa teknik mesin motor 
    });
    
    Route::get('/akuntansi', function () {
        return view('jurusan.akuntansi'); // Halaman Akuntansi
    });
    
    
    Route::get('/tkj', function () {
        return view('jurusan.tkj'); // Halaman Manajemen tenik kabel dan jaringan 
    });

    Route::get('/visi-misi', function () {
        return view('jurusan.visi-misi'); // Halaman visi misi
    });
});

// Route::get('/jurusan/bisnis-retail', function () {
//     return view('jurusan.bisnis-retail'); // Halaman Bisnis Retail
// });

// Route::get('/jurusan/visi-misi', function () {
//     return view('jurusan.visi-misi'); // Halaman visi misi
// });

// Guru routes

Route::prefix('guru')->name('guru.')->group(function () {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::get('/create', [GuruController::class, 'create'])->name('create');
    Route::post('/', [GuruController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [GuruController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [GuruController::class, 'destroy'])->name('destroy');
});


// prestasi
// Route::resource('prestasi', PrestasiController::class);

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/create', [EventController::class, 'create'])->name('create');
    Route::post('/store', [EventController::class, 'store'])->name('store');
    Route::get('/{id}', [EventController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [EventController::class, 'destroy'])->name('destroy');
});

// Route::get('/events', [EventController::class, 'index'])->name('events.index');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('event.show'); // Rute untuk detail event

Route::prefix('prestasis')->name('prestasi.')->group(function () {
    Route::get('/', [PrestasiController::class, 'index'])->name('index');
    Route::get('/create', [PrestasiController::class, 'create'])->name('create');
    Route::post('/store', [PrestasiController::class, 'store'])->name('store');
    Route::get('/{id}', [PrestasiController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PrestasiController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [PrestasiController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [PrestasiController::class, 'destroy'])->name('destroy');
});


// Route::get('/prestasis', [PrestasiController::class, 'index'])->name('prestasi.index');
// Route::get('/prestasis/{id}', [PrestasiController::class, 'show'])->name('prestasi.show'); 
// Rute untuk detail event

Route::prefix('ekskul')->name('ekskul.')->group(function () {
    Route::get('/', [EkskulController::class, 'index'])->name('index');
    Route::get('/create', [EkskulController::class, 'create'])->name('create');
    Route::post('/store', [EkskulController::class, 'store'])->name('store');
    Route::get('/{id}', [EkskulController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [EkskulController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [EkskulController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [EkskulController::class, 'destroy'])->name('destroy');
});
// Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul.index'); 

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
    








