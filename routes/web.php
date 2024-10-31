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
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\VisiMisiController;
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
    Route::prefix('admin')->name('admin.')->group(function () {
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

 // Operator routes 
Route::prefix('operator')->name('operator.')->group(function () {
    // Menampilkan form login
    Route::get('/login', [OperatorController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [OperatorController::class, 'login'])->name('submit');

    // Menampilkan form tambah berita
    Route::get('/create', [OperatorController::class, 'create'])->name('create')->middleware('auth:operator');

    // Menyimpan berita baru
    Route::post('/store', [OperatorController::class, 'store'])->name('store')->middleware('auth:operator');

    // Menampilkan form edit berita
    Route::get('/edit/{id}', [OperatorController::class, 'edit'])->name('edit')->middleware('auth:operator');

    // Memperbarui berita
    Route::put('/update/{id}', [OperatorController::class, 'update'])->name('update')->middleware('auth:operator');

    // Menghapus berita
    Route::delete('/destroy/{id}', [OperatorController::class, 'destroy'])->name('destroy')->middleware('auth:operator');

    // Operator logout
    Route::post('/logout', [OperatorController::class, 'logout'])->name('logout');
});

    // CRUD routes for Jurusan
    Route::prefix('jurusan')->name('jurusan.')->group(function () {
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

    // Guru routes
    Route::prefix('guru')->name('guru.')->group(function () {
        Route::get('/', [GuruController::class, 'index'])->name('index');
        Route::get('/create', [GuruController::class, 'create'])->name('create');
        Route::post('/', [GuruController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [GuruController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [GuruController::class, 'destroy'])->name('destroy');
    });

    // Event routes
    Route::prefix('events')->name('events.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/store', [EventController::class, 'store'])->name('store');
        Route::get('/{id}', [EventController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [EventController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [EventController::class, 'destroy'])->name('destroy');
    });

    // Prestasi routes
    Route::prefix('prestasis')->name('prestasi.')->group(function () {
        Route::get('/', [PrestasiController::class, 'index'])->name('index');
        Route::get('/create', [PrestasiController::class, 'create'])->name('create');
        Route::post('/store', [PrestasiController::class, 'store'])->name('store');
        Route::get('/{id}', [PrestasiController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [PrestasiController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [PrestasiController::class, 'update'])->name('update');
        Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('destroy');
    });

    // Ekskul routes
    Route::prefix('ekskul')->name('ekskul.')->group(function () {
        Route::get('/', [EkskulController::class, 'index'])->name('index');
        Route::get('/create', [EkskulController::class, 'create'])->name('create');
        Route::post('/store', [EkskulController::class, 'store'])->name('store');
        Route::get('/{id}', [EkskulController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [EkskulController::class, 'edit'])->name('edit');
        Route::post('/ekskul/update/{id}', [EkskulController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [EkskulController::class, 'destroy'])->name('destroy');
    });
    // fasilitas routes
    Route::prefix('fasilitas')->name('fasilitas.')->group(function () {
        Route::get('/', [FasilitasController::class, 'index'])->name('index');
        Route::get('/create', [FasilitasController::class, 'create'])->name('create');
        Route::post('/store', [FasilitasController::class, 'store'])->name('store');
        Route::get('/{id}', [FasilitasController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [FasilitasController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [FasilitasController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [FasilitasController::class, 'destroy'])->name('destroy');
    });
    // jurusan routes
    Route::prefix('jurusan')->name('jurusan.')->group(function () {
        Route::get('/', [JurusanController::class, 'index'])->name('index');
        Route::get('/create', [JurusanController::class, 'create'])->name('create');
        Route::post('/store', [JurusanController::class, 'store'])->name('store');
        Route::get('/{id}', [JurusanController::class, 'show'])->name('show');
        Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [JurusanController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [JurusanController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [JurusanController::class, 'destro
        y'])->name('destroy'); // Ubah ke DELETE
    });
      
    // Visi Misi Routes
    Route::prefix('visimisi')->name('visimisi.')->group(function () {
        Route::get('/', [VisiMisiController::class, 'index'])->name('index');
        Route::get('/create', [VisiMisiController::class, 'create'])->name('create');
        Route::post('/store', [VisiMisiController::class, 'store'])->name('store');
        Route::get('/{id}', [VisiMisiController::class, 'show'])->name('show');
        Route::get('/jurusan/{id}', [VisiMisiController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [VisiMisiController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [VisiMisiController::class, 'update'])->name('update'); // Tambahkan ini
        Route::delete('/destroy/{id}', [VisiMisiController::class, 'destroy'])->name('destroy'); // Ubah ke DELETE
    });

    Route::prefix('berita')->name('berita.')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('index');
        Route::get('/create', [BeritaController::class, 'create'])->name('create');
        Route::post('/store', [BeritaController::class, 'store'])->name('store');
        Route::get('/{id}', [BeritaController::class, 'show'])->name('show');
        Route::get('/jurusan/{id}', [BeritaController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [BeritaController::class, 'update'])->name('update'); // Tambahkan ini
        Route::delete('/destroy/{id}', [BeritaController::class, 'destroy'])->name('destroy'); // Ubah ke DELETE
    });
    

    
// Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul.index'); 

Route::get('/berita/kegiatan1', function () {
    return view('berita.kegiatan1');
});

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');

// routes/web.php
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index'); // Akses tanpa login

    Route::get('/profile/selayang-pandang', function () {
        return view('profile.selayang-pandang'); // Pastikan nama view sesuai
    });


    Route::get('/profile/sambutan-kepalasekolah', function () {
        return view('profile.sambutan-kepalasekolah');
    });

    
    Route::get('/visimisi/visi-misi', function () {
        return view('visimisi.visi-misi');
    });


Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('/jurusan/tsm', [JurusanController::class, 'tsm'])->name('jurusan.tsm');
Route::get('/jurusan/akuntansi', [JurusanController::class, 'akuntansi'])->name('jurusan.akuntansi');
Route::get('/jurusan/tkj', [JurusanController::class, 'tkj'])->name('jurusan.tkj');
