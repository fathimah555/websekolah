<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <section id="prestasi" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Prestasi</h2> <!-- Judul halaman -->

        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('prestasi.create') }}" class="btn btn-primary mt-4 mb-4">Tambah Prestasi</a>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Responsif dengan gutter -->
            @foreach($prestasis as $item) <!-- Ubah $prestasi menjadi $prestasis -->
            <div class="col mb-4 d-flex align-items-stretch"> <!-- d-flex untuk memastikan tinggi kolom sama -->
                <div class="card h-100 shadow border-0 rounded"> <!-- h-100 memastikan kartu memenuhi tinggi kolom -->
                    <!-- Gunakan fungsi asset() untuk merujuk gambar di folder assets -->
                    <img src="{{ asset('assets/images/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center d-flex flex-column"> <!-- flex-column untuk menyusun konten vertikal -->
                        <h5 class="card-title font-weight-bold">{{ $item->title }}</h5>
                        <p class="card-text text-muted">{{ $item->description }}</p>
                        <p class="card-text text-muted">Tanggal: {{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</p>
                        <div class="mt-auto"></div> <!-- Spacer untuk menjaga konten tetap teratur -->

                        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('prestasi.edit', $item->id) }}" class="btn btn-warning w-100">Edit</a>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('prestasi.destroy', $item->id) }}" method="POST">
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
    
</body>
</html>