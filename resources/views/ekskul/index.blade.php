@extends('layouts.app')

@section('content')
<section id="ekskul" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Daftar Ekstrakurikuler</h2> <!-- Judul halaman -->

        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('ekskul.create') }}" class="btn btn-primary mt-4 mb-4">Tambah Ekskul</a>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Responsif dengan gutter -->
            @foreach($ekskul as $item)
                <div class="col mb-4 d-flex align-items-stretch"> <!-- d-flex untuk memastikan tinggi kolom sama -->
                    <div class="card h-100 shadow border-0 rounded"> <!-- h-100 memastikan kartu memenuhi tinggi kolom -->

                        <!-- Cek apakah gambar ada sebelum menampilkan -->
                        @if($item->gambar && file_exists(public_path('assets/images/' . $item->gambar)))
                            <img src="{{ asset('assets/images/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}" style="height: 200px; object-fit: cover;">
                        @else
                            <!-- Gambar default jika tidak ada gambar tersedia -->
                            <img src="{{ asset('assets/images/default.jpg') }}" class="card-img-top" alt="Default Image" style="height: 200px; object-fit: cover;">
                        @endif
                        
                        <div class="card-body text-center d-flex flex-column"> <!-- flex-column untuk menyusun konten vertikal -->
                            <h5 class="card-title font-weight-bold">{{ $item->nama }}</h5>
                            <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                            <div class="mt-auto"></div> <!-- Spacer untuk menjaga konten tetap teratur -->

                            @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                <div class="row mt-2"> <!-- Tambahkan margin atas untuk spasi -->
                                    <div class="col-6">
                                        <a href="{{ route('ekskul.edit', $item->id) }}" class="btn btn-warning w-100">Edit</a>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{ route('ekskul.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE') <!-- Pastikan untuk menyertakan metode DELETE -->
                                            <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
