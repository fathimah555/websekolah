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


<!-- 
<div class="container py-5 keunggulan-section">
    <h2 class="text-center text-warning mb-4">Keunggulan Kami</h2>
    <div class="row align-items-start"> 
        <div class="col-md-6 mb-4">
            <div class="card h-100"> 
                <img src="assets/images/keunggulan-kami.png" class="card-img-top" alt="Keunggulan Kami">
                <div class="card-body">
                    <h5 class="card-title">Keunggulan Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Terakreditasi A "sangat baik"</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Ruang dan Alat Praktik yang Nyaman dan Lengkap</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Desain Bangunan Modern dan Nyaman</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Kerjasama dengan Dunia Industri dan Dunia Usaha</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Kurikulum Nasional</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Ber   prestasi di Bidang Akademik dan Non Akademik</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Beasiswa Yayasan untuk Siswa Berprestasi</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Beasiswa Yayasan bagi Siswa Tidak Mampu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --> 

<!-- <div class="container my-5">
    <div class="alert alert-info text-center" role="alert">
        <h4 class="alert-heading">Jumlah Siswa Terdaftar</h4>
        <p>Yuk, lihat berapa banyak siswa yang telah terdaftar di SMK GEMA KARYA BAHANA!</p>
        <hr>
        <div class="mb-0">
            <button class="btn btn-info" onclick="scrollToSection()" style="width: 150px;">
                <i class="bi bi-arrow-down-circle"></i> Lihat Jumlah Siswa
            </button>
        </div>
    </div>
</div> -->

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

<!-- <section id="guru-tenaga-kependidikan" class="py-5"> -->
    <!-- <div class="container">
    <div class="box" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-center mb-4">Guru dan Tenaga Kependidikan</h2>
    </div>
        <div class="row">
            <div class="col-md-4 mb-4">
            <div class="box" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-sm">
                    <img src="" class="card-img-top rounded-circle" alt="Nama Guru 1" style="width: 100px; height: 100px; margin: 20px auto;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Muh. Nurrohman S.Kom</h5>
                        <p class="card-text">Guru Produktif RPL (Ketua Kompetensi Keahlian RPL)</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="box" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-sm">
                    <img src="" class="card-img-top rounded-circle" alt="Nama Guru 2" style="width: 100px; height: 100px; margin: 20px auto;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nurul Asfiyah, S.Pd</h5>
                        <p class="card-text">Guru Agama Islam</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="box" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-sm">
                    <img src="" class="card-img-top rounded-circle" alt="Nama Guru 3" style="width: 100px; height: 100px; margin: 20px auto;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mujahid Robbani S.Pd </h5>
                        <p class="card-text"> Guru Produktif RPL (Staff Kesiswaan)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="text-center mt-4">
        <div class="box" data-aos="fade-up" data-aos-duration="500">
            <a href="{{ route('guru.index') }}" class="btn btn-" style="background-color: #FFAD60;">
                Lihat Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section> -->





<!-- about sesiion -->
 <!-- <section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 font-weight-bold">Visi dan Misi</h2>
        <div class="row">
         
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Visi</h5>
                        <p class="card-text">Mencetak generasi berprestasi dan berkarakter unggul melalui pendidikan yang berkualitas dan inovatif di SMKN 10 Jakarta.</p>
                    </div>
                </div>
            </div>
 
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Misi</h5>
                        <ul class="card-text">
                            <li>Memberikan pendidikan berbasis kompetensi yang sesuai dengan perkembangan teknologi dan kebutuhan industri.</li>
                            <li>Mengembangkan potensi peserta didik agar menjadi lulusan yang profesional dan berkarakter.</li>
                            <li>Menciptakan lingkungan belajar yang kondusif dan berorientasi pada prestasi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<main class="py-4">
    @yield('content')

<!-- 
<section id="keterserapan-lulusan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4" style="font-weight: bold;"></h2>
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4" data-aos="fade-up">
                <div class="card" style="border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="card-body text-center">
                        <h5 class="card-title">Grafik Keterserapan Lulusan</h5>
                        <img src="assets/images/Picture36.jpg" class="img-fluid" style="max-width: 400px;" alt="Grafik Keterserapan Lulusan" />
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> -->




<!-- <section id="sekolah-teknologi" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Sekolah Berbasis Teknologi Digital</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded hover-card">
                    <div class="card-body text-center">
                        <div class="icon-container bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 100px; height: 100px;">
                            <i class="bi bi-collection text-dark" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title mt-4">Infrastruktur Teknologi</h5>
                        <p class="card-text">Infrastruktur sekolah yang mendukung pembelajaran berbasis teknologi digital.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded hover-card">
                    <div class="card-body text-center">
                        <div class="icon-container bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 100px; height: 100px;">
                            <i class="bi bi-wifi text-dark" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title mt-4">Pembelajaran Digital</h5>
                        <p class="card-text">Sekolah kami memanfaatkan teknologi digital dalam setiap aspek pembelajaran.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded hover-card">
                    <div class="card-body text-center">
                        <div class="icon-container bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 100px; height: 100px;">
                            <i class="bi bi-smartwatch text-dark" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="card-title mt-4">Teknologi Smart Class</h5>
                        <p class="card-text">Kami menggunakan teknologi Smart Class untuk menciptakan pembelajaran yang interaktif dan modern.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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




            <!-- Tabel Berita
            <div class="container mt-5">
                <h2 class="display-4 text-center mb-4">Daftar Berita</h2>
               
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-striped">
                    <thead> 
                        <tr>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> -->
                    <!-- @if (Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'operator')
    @foreach ($berita as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ Str::limit($item->content, 50) }}</td>
            <td>
                <a href="{{ route('operator.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('operator.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
@endif -->

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

