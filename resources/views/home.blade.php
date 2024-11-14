@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
 <!-- Hero Section -->
<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide Pertama -->
        <div class="carousel-item active" style="background-image: url('assets/images/Picture20.jpg'); height: 70vh; background-size: cover; background-position: center;">
            <div class="bg-dark bg-opacity-50" style="height: 100%; display: flex; align-items: center;">
                <div class="carousel-caption text-white text-center">
                    <h1 class="display-4">Selamat Datang di SMK GEMA KARYA BAHANA</h1>
                    <p class="lead">Ber Akhlak Mulia, Ber Taqwa & Ber Mutu (ATM)</p>
                    <a href="{{ route('home') }}" class="btn  text-dark"></a>
                </div>
            </div>
        </div>
        
        <!-- Slide Kedua -->
        <div class="carousel-item" style="background-image: url('assets/images/Picture30.jpg'); height: 70vh; background-size: cover; background-position: center;">
            <div class="bg-dark bg-opacity-50" style="height: 100%; display: flex; align-items: center;">
                <div class="carousel-caption text-white text-center">
                    <h1 class="display-4"></h1>
                    <p class="lead"></p>
                    <a href="#about" class="btn btn-" ></a>
                </div>
            </div>
        </div>

        <!-- Slide Ketiga -->
        <div class="carousel-item" style="background-image: url('assets/images/Picture21.jpg'); height: 70vh; background-size: cover; background-position: center;">
            <div class="bg-dark bg-opacity-50" style="height: 100%; display: flex; align-items: center;">
                <div class="carousel-caption text-white text-center">
                    <h1 class="display-4"></h1>
                    <p class="lead"></p>
                    <a href="#about" class="btn btn-" ></a>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<div class="container mt-5">
    <div class="row g-4">
        <!-- Berita Terbaru Card -->
        <div class="col-md-3">
            <a href="{{route('berita.index')}}" class="card-link">
                <div class="card shadow-sm text-center p-3">
                    <div class="card-header">
                        <i class="bi bi-newspaper fs-1"></i>
                        <h5 class="card-title mt-3">Berita Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Jangan ketinggalan informasi terbaru dari sekolah. Klik untuk membaca lebih lanjut!</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Struktur / Daftar Guru Card -->
        <div class="col-md-3">
            <a href="{{route('guru.index')}}" class="card-link">
                <div class="card shadow-sm text-center p-3">
                    <div class="card-header">
                        <i class="bi bi-people fs-1"></i>
                        <h5 class="card-title mt-3">Struktur / Daftar Guru</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Kenali guru-guru yang membimbingmu. Klik di sini untuk melihat daftar guru.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Fasilitas / Sarana Prasarana Card -->
        <div class="col-md-3">
            <a href="{{route('fasilitas.index')}}" class="card-link">
                <div class="card shadow-sm text-center p-3">
                    <div class="card-header">
                        <i class="bi bi-building fs-1"></i>
                        <h5 class="card-title mt-3">Fasilitas / Sarana Prasarana</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat fasilitas modern yang mendukung kegiatan belajar di sekolah ini.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Jurusan Card -->
        <div class="col-md-3">
            <!-- Seluruh card bisa diklik -->
            <a href="{{ route ('jurusan.index') }}"class="card-link">
                <div class="card shadow-sm text-center p-3">
                    <div class="card-header">
                        <i class="bi bi-tools fs-1"></i>
                        <h5 class="card-title mt-3">Jurusan</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Pilih jurusan yang sesuai dengan minatmu:</p>
                        <ul class="list-unstyled">
                            <li><strong>Teknik Komputer dan Jaringan</strong></li>
                            <li><strong>Teknik Sepeda Motor</strong></li>
                            <li><strong>Akuntansi</strong></li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        height: 100%;
        cursor: pointer;
        text-decoration: none;
        color: inherit;
    }

    .card:hover {
        background-color: #f8f9fa;
    }

    .card-link {
        position: relative;
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Hapus hover after untuk jurusan-link */
    .jurusan-link::after {
        display: none;
    }

    .jurusan-link:hover {
        color: inherit; /* Tidak ada perubahan warna saat dihover */
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .card-header i {
        font-size: 2rem; /* Adjust icon size */
    }
</style>

<div class="container mt-5" id="jumlahSiswaSection">
    <div class="row">
        <div class="col-md-6 mt-8">
            <div class="text-center">
                <div class="card shadow-lg border-0 rounded" style="transition: transform 0.3s;">
                    <div class="card-body">
                        <h1 id="jumlahSiswa" class="font-weight-bold" style="font-size: 5rem;">0</h1>
                        <span class="badge bg-success" style="font-size: 1.2rem;">Siswa Terdaftar</span>
                        <div class="progress mt-5">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" id="progressBar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1000">0%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="text-center">
                <canvas id="myPieChart" style="max-width: 400px; max-height: 400px;"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function scrollToSection() {
        document.getElementById('jumlahSiswaSection').scrollIntoView({ behavior: 'smooth' });
    }

    function scrollToContent() {
        document.querySelector('.container.mt-5').scrollIntoView({ behavior: 'smooth' });
    }

    // Menghitung jumlah siswa 
    let totalSiswa = 695;
    let count = 0;

    const interval = setInterval(() => {
        if (count < totalSiswa) {
            count++;
            document.getElementById('jumlahSiswa').innerText = count;
            document.getElementById('progressBar').style.width = `${(count / totalSiswa) * 100}%`;
            document.getElementById('progressBar').innerText = `${Math.round((count / totalSiswa) * 100)}%`;
        } else {
            clearInterval(interval);
        }
    }, 5);

    // hover untuk card
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'scale(1.05)';
            card.style.boxShadow = '0 4px 20px rgba(0,0,0,0.2)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'scale(1)';
            card.style.boxShadow = 'none';
        });
    });

    // Data untuk Pie Chart
    const data = {
        labels: ['Wirausaha 11%', 'Bekerja 45%', 'Magang 2%', 'Melanjutkan Kuliah 8%', 'Pelatihan 3%', 'Proses Mencari Kerja 31%'],
        datasets: [{
            data: [11, 45, 2, 8, 3, 31],
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF',
                '#FF9F40'
            ],
            hoverBackgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF',
                '#FF9F40'
            ]
        }]
    };

    // Membuat Pie Chart dengan persentase di tooltips
    const ctx = document.getElementById('myPieChart').getContext('2d');
    const myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const label = tooltipItem.label || '';
                            const value = tooltipItem.raw || '';
                            return `${label}: ${value}%`;
                        }
                    }
                }
            }
        }
    });
</script>
<div class="container mt-5">
    <hr class="my-4" style="border-top: 2px dashed #007bff;">
</div>

<main class="py-4">
    @yield('content')


    <div class="container my-5">
    <div class="row text-center">
        <!-- Jurusan 1 -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <img src="assets/images/logo TKJ.png" alt="Logo Jurusan 1" class="img-fluid" style="max-width: 100px;">
            <h5 class="mt-3">Teknik Komputer dan Jaringan </h5>
        </div>

        <!-- Jurusan 2 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/logo TSM.jpg" alt="Logo Jurusan 2" class="img-fluid" style="max-width: 100px;">
            <h5 class="mt-3">Teknik Sepeda Motor </h5>
        </div>

        <!-- Jurusan 3 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/images/logo akuntansi.png" alt="Logo Jurusan 3" class="img-fluid" style="max-width: 100px;">
            <h5 class="mt-3">Akuntansi</h5>
        </div>
    </div>
</div>



<div class="container mt-4">
    <div class="row">
        <!-- Gambar sebelah kiri -->
        <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-left">
            <div class="d-flex">
                <img src="assets/images/Picture34.png" class="img-fluid me-2" alt="Foto 1" style="width: 45%; max-width: 300px;">
                <img src="assets/images/Picture35.png" class="img-fluid" alt="Foto 2" style="width: 45%; max-width: 300px;">
            </div>
        </div>

        <!-- Kotak keunggulan sebelah kanan -->
        <div class="col-md-6">
            <div class="custom-box" style="background-color: #FFAD60; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-right">
                <h2 class="text-center">Keunggulan Kami</h2>
                <ul class="list-unstyled mt-3">
                    <li>✔️ Terakreditasi A "sangat baik"</li>
                    <li>✔️ Ruang dan Alat Praktik yang Nyaman dan Lengkap</li>
                    <li>✔️ Desain Bangunan Modern dan Nyaman</li>
                    <li>✔️ Kerjasama dengan Dunia Industri dan Dunia Usaha</li>
                    <li>✔️ Kurikulum Nasional</li>
                    <li>✔️ Berprestasi di Bidang Akademik dan Non Akademik</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section id="penghargaan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Prestasi Sekolah</ h2>
        <div id="carouselPenghargaan" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture24.jpg') }}" class="card-img-top" alt="Penghargaan 1" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">LOMBA TARI JUARA 1 TINGKAT SMK SE KOTA BEKASI</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture25.png') }}" class="card-img-top" alt="Penghargaan 2" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">JUARA 3 OLIMPIADE AKUNTANSI DAN PERPAJAKAN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture26.jpg') }}" class="card-img-top" alt="Penghargaan 3" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">JUARA 2 AMBASSADOR BUSINESS ENTREPRENEUR</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture27.jpg') }}" class="card-img-top" alt="Penghargaan 4" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">LOMBA TYPHOGRAPHY (BASKET) JUARA 2 PUTRA</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture28.jpg') }}" class="card-img-top" alt="Penghargaan 5" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">LOMBA TYPHOGRAPHY (BASKET) JUARA 3 PUTRI</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow border-0">
                                <img src="{{ asset('assets/images/Picture29.jpg') }}" class="card-img-top" alt="Penghargaan 6" style="max-height: 200px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                <div class="card-body">
                                    <h5 class="card-title">LOMBA TARI JUARA 3 DINAS PARIWISATA DAN KEBUDAYAAN KOTA BEKASI</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselPenghargaan" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPenghargaan" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselPenghargaan" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselPenghargaan" data-bs-slide-to="1"></li>
            </ol>
        </div>
        <div class="text-center mt-4">
            <div class="border rounded p-3 bg-white shadow">
                <a href="{{route('prestasi.index')}}" class="btn btn- text-white rounded-pill" style="background-color: #FFAD60;">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<section id="berita" class="bg-light py-5">
    <div class="container">
        <h2 class="display-4 text-center mb-4">Berita</h2>
        <div class="row">
            @foreach($berita as $item)
                <div class="col-md-4 mb-3" data-aos="zoom-in">
                    <div class="card h-100 shadow border-light rounded">
                        <img src="{{ asset('assets/images/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 150px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text d-flex align-items-center justify-content-center" style="min-height: 60px;">
                                {{ Str::limit($item->description, 100) }} [...]
                            </p>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <small>Diposting pada {{ $item->created_at->format('d M Y') }}</small>
                            <div class="mt-2">
                                <!-- Tombol Edit dan Hapus -->
                                @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'operator')
                                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}" class="btn text-white" style="background-color: #FFAD60;">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Bagian Embed Instagram -->
<!-- <section id="instagram" class="bg-white py-5">
<h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif;">Instagram Updates</h2>
        <center>
        <div class="embed-responsive embed-responsive-16by9">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/smkn_10jakarta?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:undefinedpx;height:undefinedpx;max-height:100%; width:undefinedpx;"><div style="padding:16px;"> <a id="main_link" href="smkn_10jakarta?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="smkn_10jakarta?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Shared post</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;">Time</time></p></div></blockquote><script src="https://www.instagram.com/embed.js"></script><script type="text/javascript" src="https://www.embedista.com/j/instagramfeed1707.js"></script><div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"><a href="https://www.embedista.com/instagramfeed">Embed Instagram Post</a> Code Generator</div></div><style>.boxes3{height:175px;width:153px;} #n img{max-height:none!important;max-width:none!important;background:none!important} #inst i{max-height:none!important;max-width:none!important;background:none!important}</style></div>
            </div>
                </center>
                    </div>
                        </section> -->

<!-- lokasi -->
<div class="container mt-5" id="lokasiSection">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-3" style="font-family: 'Arial', sans-serif;">
                Lokasi Kami
                <div class="border-bottom border-3 mt-3" style="width: 13 00px;"></div>
            </h2>
        </div>
    </div>
    <div class="row align-items-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="bg-light p-4 rounded shadow-sm">
            <h5>Alamat:</h5>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-geo-alt-fill text-primary me-2" style="font-size: 1.5rem;"></i>
                <p class="mb-0">Jl. Raya Pekayon Pondok Gede No. 53 Kel. Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi. 1714</p>
            </div>
            <h5>Telepon:</h5>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-telephone-fill text-success me-2" style="font-size: 1.5rem;"></i>
                <p class="mb-0">(+62) 813-8434-04843</p>
            </div>
            <h5>Email:</h5>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-envelope-fill text-danger me-2" style="font-size: 1.5rem;"></i>
                <p class="mb-0">smkgemakaryabahana.kotabekasi@gmail.com</p>
            </div>
            <h5>Jam Operasional:</h5>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-clock-fill text-warning me-2" style="font-size: 1.5rem;"></i>
                <p class="mb-0">Senin - Jumat: 07:00 - 15:00 WIB</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
            <div class="bg-light p-4 rounded shadow-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0139900962936!2d106.98447097437925!3d-6.261886861303948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d32199587d7%3A0x94029b611b6b0ea8!2sSMK%20Gema%20Karya%20Bahana!5e0!3m2!1sid!2sid!4v1728024864557!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
        </div>
    </div>
</div>

 <!-- Script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Bootstrap JS and dependencies (Optional for interactive components) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<script>
    // Inisialisasi AOS
    AOS.init();
    $(document).ready(function() {
        var counted = false; // Untuk mencegah hitungan berulang
        $(window).scroll(function() {
            var oTop = $('#statistik').offset().top - window.innerHeight;
            if (!counted && $(window).scrollTop() > oTop) {
                $('.counter').each(function() {
                    var $this = $(this);
                    var countTo = $this.attr('data-count'); // Ambil nilai dari atribut data-count
                    $({ countNum: $this.text() }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000, // Durasi animasi
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum)); // Memperbarui nilai yang ditampilkan
                        },
                        complete: function() {
                            $this.text(this.countNum); // Memastikan nilai akhir ditampilkan
                        }
                    });
                });
                counted = true; // Mencegah hitungan lagi
            }
        });
    });
</script>
@endsection

