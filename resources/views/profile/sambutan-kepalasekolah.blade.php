@extends('layouts.app')

@section('content')
<!-- Sambutan Sekolah Section -->
<section id="sambutan" class="py-5 bg-light">
    <div class="container">
        <div data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-center mb-4 font-weight-bold">Sambutan Kepala Sekolah</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/kepalasekolahh.png') }}" class="img-fluid shadow" alt="Kepala Sekolah" style="width: 250px; height: 250px; object-fit: cover;">
                </div>
                <h5 class="text-body mt-3"></h5> 
            </div>

            <!-- Isi Sambutan di sebelah kanan gambar -->
            <div class="col-md-8">
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="lead mt-7" style="font-size: 14px;">
                        Assalamu’alaikum Warahmatullahi Wabarakatuh,<br>
                        Selamat datang di website resmi SMK Gema Karya Bahana. Kami sangat bangga bisa menyambut Anda semua di sini. Sekolah kami berkomitmen untuk memberikan pendidikan berkualitas dan inovatif untuk membentuk generasi yang berprestasi dan berkarakter.
                    </p>
                    <p>
                        Kami mengajak para siswa untuk aktif dalam berbagai kegiatan akademis dan non-akademis, serta mengembangkan potensi terbaik mereka di lingkungan yang kondusif. Mari bergandeng tangan untuk mencapai kesuksesan bersama.
                    </p>
                    <p>Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
