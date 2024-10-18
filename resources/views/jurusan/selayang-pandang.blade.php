@extends('layouts.app')

@section('title', 'Selayang Pandang')

@section('content')
    <!-- Tambahkan AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Header Section -->
    <!-- <div class="text-warning text-center py-5" style="background: linear-gradient(to right, #FFAD60, #FF6F00);">
        <h1 class="display-4" style="font-family: 'Poppins', sans-serif;">Selamat Datang di SMK Gema Karya Bahana</h1>
        <p class="lead" style="font-family: 'Poppins', sans-serif;">Mewujudkan Siswa Berprestasi dan Berkarakter</p>
    </div> -->
    <div class="container mt-5">
        <h2 class="text-center mb-4"></h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4" data-aos="fade-right">
                <img src="{{ asset('assets/images/Picture40.png') }}" alt="Gambar Sekolah" class="img-fluid rounded shadow mb-4" style="transition: transform 0.3s ease;"> <!-- Gambar dari assets -->
            </div>
            <div class="col-md-8" data-aos="fade-left">
                <p class="text-dark" style="font-family: 'Poppins', sans-serif;">
                    SMK Gema Karya Bahana berdiri sejak tahun 2019 di bawah naungan Yayasan Pendidikan Sakha Ramdan Aditya merupakan salah satu Sekolah Menengah Kejuruan di wilayah kawasan tengah kota Pekayon Bekasi.
                </p>
                <p class="text-dark" style="font-family: 'Poppins', sans-serif;">
                    Kawasan tengah kota Pekayon Bekasi Selatan dengan jumlah siswa 695 dan ditunjang oleh luas tanah mencapai 3.320m2, dengan kurikulum, sarana prasarana, alat praktik dan ruangan belajar.
                </p>
                <p class="text-dark" style="font-family: 'Poppins', sans-serif;">
                    Menjadikan SMK Gema Karya Bahana tempat yang menerapkan budaya industri dalam Kegiatan Belajar Mengajar (KBM).
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="card text-center border-warning" style="border-radius: 15px;">
                    <div class="card-header bg- text-white" style="background-color: #FFAD60;">
                        2019
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">SMK Gema Karya Bahana berdiri</h5>
                        <p class="card-text">Berdiri di Jl. Raya Pekayon Pondok Gede, Kota Bekasi.</p>
                        <a href="#" class="btn btn- text-white" style="background-color: #FFAD60;">Pertama berdiri</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="card text-center border-warning" style="border-radius: 15px;">
                <div class="card-header bg- text-white" style="background-color: #FFAD60;">
                      2019-2020
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> SMK Gema Karya Bahana Mandiri </h5>
                        <p class="card-text">Pemenuhan Izin Prinsip Keluar, Izin Operasional, dan Sarana Sekolah.</p>
                        <a href="#" class="btn btn- text-white" style="background-color: #FFAD60; ">Status Disamakan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="card text-center border-warning" style="border-radius: 15px;">
                <div class="card-header bg- text-white" style="background-color: #FFAD60;">
                     2022
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Akreditasi A</h5>
                        <p class="card-text">Terakreditasi A oleh Badan Akreditasi Nasional.</p>
                        <a href="#" class="btn btn- text-white" style="background-color: #FFAD60;">Akreditasi A</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="card text-center border-warning" style="border-radius: 15px;">
                <div class="card-header bg- text-white" style="background-color: #FFAD60;">
                      2022-2024
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Fokus Kualitas SDM</h5>
                        <p class="card-text">Menekankan kualitas pembelajaran dan prestasi akademik.</p>
                        <a href="#" class="btn btn- text-white" style="background-color: #FFAD60;">Fokus Kualitas SDM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init(); // Inisialisasi AOS
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
