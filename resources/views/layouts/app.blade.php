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
                        <li><a class="dropdown-item text-body" href="/profile/selayang-pandang"><i class="fas fa-info-circle"></i> Selayang Pandang</a></li>
                        <li><a class="dropdown-item text-body" href="/profile/sambutan-kepalasekolah"><i class="fas fa-chalkboard-teacher"></i> Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item text-body" href="{{ route('visimisi.index') }}"><i class="fas fa-bullseye"></i> Visi Misi</a></li>
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
                <!-- Tombol User Admin atau Logout -->
                <li class="nav-item dropdown mx-2">
    @if(Auth::check())
        <!-- Dropdown Admin hanya muncul jika user sudah login -->
        <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-cog"></i> {{ Auth::user()->name }} <!-- Menampilkan nama pengguna -->
        </a>
        
        <!-- Menu Dropdown untuk Admin -->
        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
            @if(Auth::user()->hasRole('admin')) <!-- Memeriksa apakah user memiliki role 'admin' -->
                <!-- Link Pengaturan Admin -->
                <li>
                    <a class="dropdown-item text-body" href="{{ route('admin.settings.index') }}">
                        <i class="fas fa-cogs"></i> Pengaturan
                    </a>
                </li>
            @endif

            <!-- Menu Logout -->
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item text-body" style="border: none; background: none; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    @else
        <!-- Link Login jika pengguna belum login -->
        <a class="nav-link text-white" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    @endif
</li>
            </ul>
        </div>
    </div>
</nav>
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-white text-center py-4 mt-4" style="background-color: #E8B86D;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5></h5>
                <ul class="list-unstyled">
                    <!-- <li><a href="mailto:info@smkgemakaryabahana.com" class="text-white">Email: info@smkgemakaryabahana.com</a></li>
                    <li><a href="tel:+62123456789" class="text-white">Tel: +62 123 456 789</a></li> -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

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
        document.body.scrollTop = 0; // Untuk Safari
        document.documentElement.scrollTop = 0; // Untuk Chrome, Firefox, IE dan Opera
    }
</script>
  <!-- Bootstrap JS -->
</body>
</html>