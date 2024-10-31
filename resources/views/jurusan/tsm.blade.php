<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMK GEMA KARYA BAHANA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan di dalam tag <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow" style="background-color: #E8B86D;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 100px; height: 100px;">
        <span class="ms-2 text-white fw-bold fs-4">SMK GEMA KARYA BAHANA</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <!-- Profil Dropdown -->
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item text-body" href="/jurusan/selayang-pandang"><i class="fas fa-info-circle"></i> Selayang Pandang</a></li>
                        <li><a class="dropdown-item text-body" href="/jurusan/sambutan-kepalasekolah"><i class="fas fa-chalkboard-teacher"></i> Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item text-body" href="/jurusan/visi-misi"><i class="fas fa-bullseye"></i> Visi Misi</a></li>
                        <li><a class="dropdown-item text-body" href="{{ route('guru.index') }}"><i class="fas fa-users"></i> Guru dan Tenaga Pendidik</a></li>
                    </ul>
                </li>
                <!-- Kesiswaan Dropdown -->
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="kesiswaanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-graduation-cap"></i> Kesiswaan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="kesiswaanDropdown">
                        <li><a class="dropdown-item text-body" href="{{route('prestasi.index')}}"><i class="fas fa-trophy"></i> Prestasi</a></li>
                        <li><a class="dropdown-item text-body" href="{{route('ekskul.index')}}"><i class="fas fa-futbol"></i> Ekskul</a></li>
                    </ul>
                </li> 
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="{{ route('events.index') }}">
                        <i class="fas fa-calendar-alt"></i> Events
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <main class="py-4">
            @yield('content')
        <header class="text-dark text-center position-relative">
        <img src="{{ asset('assets/images/img7.jpg') }}" alt="Gambar Header" class="img-fluid" style="width: 100vw; height: 350px; object-fit: cover; position: relative; left: calc(-50vw + 50%); margin-bottom: 20px;">
        <div class="container position-relative" style="top: -80px;">
        <h1 class="display-4 text-overlay mb-2" style="position: relative; background-color: rgba(255, 255, 255, 0.8); padding: 10px 20px; border-radius: 10px;">TEKNIK SEPEDA MOTOR</h1>
    </div>
</header>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <!-- Card untuk Deskripsi -->
            <div class="card border-light rounded shadow-sm mb-4" style="background-color: #f8f9fa;">
                <!-- <div class="card-header bg- text-white"  style="background-color: #E9EFEC;"> -->
                    <h5 class="mb-0"></h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                    SMK jurusan Teknik Sepeda Motor adalah salah satu program studi yang ditawarkan di Sekolah Menengah Kejuruan (SMK) yang bertujuan untuk mempersiapkan siswa dengan keterampilan dan pengetahuan dalam perbaikan dan perawatan sepeda motor. Program studi ini biasanya menekankan pembelajaran praktis yang berfokus pada aspek teknik, mulai dari diagnosa kerusakan, perbaikan, hingga perawatan sepeda motor.
                    </p>
                </div>
            </div>

            <!-- Card untuk Materi yang Diajarkan -->
            <div class="card border-light rounded shadow-sm mb-4" style="background-color: #f8f9fa;">
                <div class="card-header text-white" style="background-color: #FFAD60;">
                    <h5 class="mb-0 text-white">Berikut adalah beberapa materi yang biasanya diajarkan dalam program studi SMK jurusan Teknik Sepeda Motor:</h5>
                </div>
               <div class="card-body">
    <ol class="list-unstyled">
        <li>
            <i class="bi bi-check-circle text-success"></i>
            <strong>1. Dasar-dasar Teknologi Sepeda Motor:</strong> Siswa mempelajari komponen utama sepeda motor, cara kerja mesin, dan sistem penggerak.
            </li>
        <li>
            <i class="bi bi-check-circle text-success"></i>
            <strong>2. Diagnosa dan Perbaikan:</strong> Siswa belajar untuk mendiagnosis masalah yang muncul pada sepeda motor dan melakukan perbaikan yang diperlukan, termasuk sistem kelistrikan dan mesin.
            </li>
        <li>
            <i class="bi bi-check-circle text-success"></i>
            <strong>3. Perawatan Berkala:</strong> Siswa mempelajari teknik perawatan sepeda motor yang rutin, termasuk penggantian oli, pemeriksaan sistem rem, dan perawatan ban.
            </li>
    </ol>
</div>
            </div>
        </div>
    </div>

    <h3 class="text-center mb-4"> Uji Sertifikasi Kompetensi (USK)</h3>
<div class="container">
    <div class="row">
        <!-- Card 1: Dokumentasi USK 1 -->
        <div class="col-md-6 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm border-light" style="width: 100%; display: flex; flex-direction: row; align-items: center;" data-aos="fade-up">
                <img src="{{ asset('assets/images/Picture45.jpg') }}" class="card-img-top" alt="Dokumentasi USK 1" style="width: 150px; height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Perbaikan Mesin</h5>
                    <p class="card-text text-muted">Uji Kompetensi Siswa dalam bidang perbaikan mesin sepeda motor, di mana siswa melakukan perakitan dan perbaikan mesin sepeda motor dengan teknik yang tepat.</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Dokumentasi USK 2 -->
        <div class="col-md-6 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm border-light" style="width: 100%; display: flex; flex-direction: row; align-items: center;" data-aos="fade-up">
                <img src="{{ asset('assets/images/Picture43.webp') }}" class="card-img-top" alt="Dokumentasi USK 2" style="width: 150px; height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Kelistrikan Sepeda Motor</h5>
                    <p class="card-text text-muted">Uji Kompetensi Siswa dalam bidang kelistrikan sepeda motor, di mana siswa memastikan sistem kelistrikan sepeda motor berfungsi dengan baik dan melakukan perbaikan jika diperlukan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Back Button -->
    <div class="text-center mb-4">
        <a href="{{ url('jurusan') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
<footer class="text-white text-center py-4 mt-4" style="background-color: #E8B86D;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Kontak</h5>
                <ul class="list-unstyled">
                    <li><a href="mailto:info@smkgemakaryabahana.com" class="text-white">Email: info@smkgemakaryabahana.com</a></li>
                    <li><a href="tel:+62123456789" class="text-white">Tel: +62 123 456 789</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Ikuti Kami</h5>
                <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i> Twitter</a>
                <a href="https://www.instagram.com/smk_gemakaryabahana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
        <p class="mb-0">&copy; {{ date('Y') }} Jl. Raya Pekayon Pondok Gede No. 53 Kel. Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi. 17148. All rights reserved.</p>
    </div>
</footer>

<button id="backToTopBtn" title="Go to top" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 99; border: none; outline: none; background-color: black; color: #E8B86D; cursor: pointer; padding: 10px; border-radius: 10px;">
    <i class="fas fa-arrow-up"></i>
</button>


<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init(); // Inisialisasi AOS

    window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("backToTopBtn").style.display = "block";
                } else {
                    document.getElementById("backToTopBtn").style.display = "none";
                }
            }

            // Ketika user mengklik tombol, scroll ke atas halaman
            document.getElementById('backToTopBtn').onclick = function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

</script>
