@extends('layouts.app')

@section('content')
<section id="fasilitas" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4"></h2> <!-- Judul halaman -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($fasilitas as $f)
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 rounded">
                    <img src="{{ asset('assets/images/' . $f->gambar) }}" class="card-img-top" alt="{{ $f->nama }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title font-weight-bold" data-bs-toggle="tooltip" title="{{ $f->deskripsi }}">{{ $f->nama }}</h5> <!-- Tooltip untuk deskripsi -->
                        <p class="card-text text-muted flex-fill">{{ $f->deskripsi }}</p> <!-- Deskripsi fasilitas -->
                        <div class="mt-auto">
                            <!-- Tidak ada tombol di sini -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>
@endsection
