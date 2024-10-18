@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Judul Halaman -->
        <h1 class="text-center mb-5" style="color: #FFAD60; font-weight: bold;"></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($prestasis as $prestasi)
                <div class="col d-flex align-items-stretch">
                    <div class="card h-100 shadow-sm border-light" style="border-radius: 15px; overflow: hidden;">
                        @if($prestasi->gambar)
                            <img src="{{ asset('assets/images/' . $prestasi->gambar) }}" 
                                 class="card-img-top img-fluid" 
                                 alt="{{ $prestasi->title }}" 
                                 style="height: 200px; object-fit: cover;"
                                 onmouseover="this.style.transform='scale(1.05)'" 
                                 onmouseout="this.style.transform='scale(1)'">
                        @else
                            <img src="https://via.placeholder.com/400x200/FFAD60/FFFFFF?text=No+Image" 
                                 class="card-img-top img-fluid" 
                                 alt="Default Image" 
                                 style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $prestasi->title }}</h5>
                            <p class="card-text text-muted">Tanggal: {{ \Carbon\Carbon::parse($prestasi->date)->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
