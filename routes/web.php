<?php

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
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('welcome');

// Authentication routes
Auth::routes();

// Home route for the application
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/marsupilami', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/marsupilami', [AdminController::class, 'login'])->name('submit');    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth:admin');
    Route::get('/create', [AdminController::class, 'create'])->name('create')->middleware('auth:admin'); 
    Route::post('/store', [AdminController::class, 'store'])->name('store')->middleware('auth:admin');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit')->middleware('auth:admin');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update')->middleware('auth:admin');
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy')->middleware('auth:admin');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

    // Rute untuk mengupdate pengaturan (menggunakan metode PUT)
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
    
    // Rute untuk menampilkan formulir pembuatan pengguna baru
    Route::get('admin/settings/create', [SettingsController::class, 'create'])->name('settings.create');
    

   Route::post('admin/settings', [SettingsController::class, 'store'])->name('settings.store');
    
    // Rute untuk mengedit pengguna
    Route::get('admin/settings/{user}/edit', [SettingsController::class, 'edit'])->name('settings.edit');
    
    // Rute untuk memperbarui data pengguna (menggunakan metode PUT)
    Route::put('admin/settings/{user}', [SettingsController::class, 'update'])->name('settings.update');
    
    // Rute untuk menghapus pengguna
    Route::delete('admin/settings/{user}', [SettingsController::class, 'destroy'])->name('settings.destroy');
});

// Operator routes 
Route::prefix('operator')->name('operator.')->group(function () {
    Route::get('/marsupilami', [OperatorController::class, 'showLoginForm'])->name('login');
    Route::post('/marsupilami', [OperatorController::class, 'login'])->name('submit');
    Route::get('/create', [OperatorController::class, 'create'])->name('create')->middleware('auth:operator');
    Route::post('/store', [OperatorController::class, 'store'])->name('store')->middleware('auth:operator');
    Route::get('/edit/{id}', [OperatorController::class, 'edit'])->name('edit')->middleware('auth:operator');
    Route::put('/update/{id}', [OperatorController::class, 'update'])->name('update')->middleware('auth:operator');
    Route::delete('/destroy/{id}', [OperatorController::class, 'destroy'])->name('destroy')->middleware('auth:operator');
    Route::post('/logout', [OperatorController::class, 'logout'])->name('logout');
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
    Route::delete('/destroy/{id}', [EventController::class, 'destroy'])->name('destroy');
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

// Fasilitas routes
Route::prefix('fasilitas')->name('fasilitas.')->group(function () {
    Route::get('/', [FasilitasController::class, 'index'])->name('index');
    Route::get('/create', [FasilitasController::class, 'create'])->name('create');
    Route::post('/store', [FasilitasController::class, 'store'])->name('store');
    Route::get('/{id}', [FasilitasController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [FasilitasController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FasilitasController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [FasilitasController::class, 'destroy'])->name('destroy');
});

// Jurusan routes
Route::prefix('jurusan')->name('jurusan.')->group(function () {
    Route::get('/', [JurusanController::class, 'index'])->name('index');
    Route::get('/create', [JurusanController::class, 'create'])->name('create');
    Route::post('/store', [JurusanController::class, 'store'])->name('store');
    Route::get('/tsm', [JurusanController::class, 'tsm'])->name('teknik sepeda motor'); // Halaman TSM
    Route::get('/tkj', [JurusanController::class, 'tkj'])->name('teknik komputer dan jaringan'); // Halaman TKJ
    Route::get('/akuntansi', [JurusanController::class, 'akuntansi'])->name('akuntansi'); // Halaman Akuntansi
    Route::get('/edit/{id}', [JurusanController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [JurusanController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [JurusanController::class, 'destroy'])->name('destroy');
});

// Visi Misi Routes
Route::prefix('visimisi')->name('visimisi.')->group(function () {
    Route::get('/', [VisiMisiController::class, 'index'])->name('index');
    Route::get('/create', [VisiMisiController::class, 'create'])->name('create');
    Route::post('/store', [VisiMisiController::class, 'store'])->name('store');
    Route::get('/{id}', [VisiMisiController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [VisiMisiController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [VisiMisiController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [VisiMisiController::class, 'destroy'])->name('destroy');
});

// Berita Routes
Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('index');
    Route::get('/create', [BeritaController::class, 'create'])->name('create');
    Route::post('/store', [BeritaController::class, 'store'])->name('store');
    Route::get('/{id}', [BeritaController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [BeritaController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [BeritaController::class, 'destroy'])->name('destroy');
});

// Route untuk halaman-halaman lain
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/profile/selayang-pandang', function () {
    return view('profile.selayang-pandang');
});
Route::get('/profile/sambutan-kepalasekolah', function () {
    return view('profile.sambutan-kepalasekolah');
});
Route::get('/visimisi/visi-misi', function () {
    return view('visimisi.visi-misi');
});










































