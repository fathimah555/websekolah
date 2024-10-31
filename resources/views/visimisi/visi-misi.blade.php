@extends('layouts.app')

@section('title', 'Visi-misi')

@section('content')
<!-- Visi dan Misi Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white text-center">
                    <h3>Visi dan Misi</h3>
                </div>
                <div class="card-body">
                    <h4 class="text-center my-3">Visi</h4>
                    <p class="text-center lead">
                        "SMK Yang Unggul Dalam Inovasi, Handal, Solutif, Akuntabel dan Berintegritas (IHSAN)"
                    </p>
                    <h4 class="text-center my-3">Misi</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Menyiapkan tenaga yang professional dan akuntabel dalam bidang keahlian dengan memanfaatkan teknologi dan informasi.</li>
                        <li class="list-group-item">2. Meningkatkan mutu layanan sesuai kebutuhan masyarakat, dunia usaha dan dunia industri.</li>
                        <li class="list-group-item">3. Melaksanakan program Pendidikan & pelatihan yang kompeten & transparan dengan membina kemitraan sesuai prinsip pengembangan infrastruktur pembangunan.</li>
                        <li class="list-group-item">4. Membangun kredibilitas dan akuntabilitas sekolah layanan prima yang sinergi antara sekolah, masyarakat, dunia usaha dan dunia industri.</li>
                        <li class="list-group-item">5. Menyiapkan tamatan yang professional dan mengadaptasikan terhadap perkembangan ilmu pengetahuan serta berjiwa mandiri, produktif, kreatif, dan bertakwa.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk animasi kartu saat halaman dimuat -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const card = document.querySelector('.card');
        card.style.opacity = 0;
        setTimeout(() => {
            card.style.transition = 'opacity 1s';
            card.style.opacity = 1;
        }, 300);
    });
</script>
@endsection
