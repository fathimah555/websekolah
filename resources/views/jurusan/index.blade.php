@extends('layouts.app')

@section('content')
<section id="jurusan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Daftar Jurusan</h2> <!-- Judul halaman -->

        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary mt-4 mb-4">Tambah Jurusan</a>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Responsif dengan gutter -->
            @foreach($jurusan as $j)
            <div class="col mb-4 d-flex"> <!-- d-flex untuk memastikan tinggi kolom sama -->
                <div class="card h-100 shadow border-0 rounded w-100"> <!-- w-100 untuk memastikan kartu memenuhi lebar kolom -->
                    <img src="{{ asset('assets/images/' . $j->gambar) }}" class="card-img-top" alt="{{ $j->nama }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center d-flex flex-column"> <!-- flex-column untuk menyusun konten vertikal -->
                        <h5 class="card-title font-weight-bold">{{ $j->nama }}</h5>
                        <p class="card-text text-muted">{{ $j->deskripsi }}</p>
                        <div class="mt-auto"></div> <!-- Spacer untuk menjaga konten tetap teratur -->

                        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-warning w-100">Edit</a>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('jurusan.destroy', $j->id) }}" method="POST">
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
<script>
    // Fungsi untuk menyesuaikan tinggi kartu agar sama
    function setCardHeight() {
        const cards = document.querySelectorAll('.card');
        let maxHeight = 0;

        // Mencari tinggi maksimum dari kartu
        cards.forEach(card => {
            const cardBody = card.querySelector('.card-body');
            if (cardBody.offsetHeight > maxHeight) {
                maxHeight = cardBody.offsetHeight;
            }
        });

        // Mengatur tinggi semua kartu agar sama
        cards.forEach(card => {
            card.querySelector('.card-body').style.height = maxHeight + 'px';
        });
    }

    // Panggil fungsi saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        setCardHeight();
    });
</script>
@endsection
