@extends('layouts.app')

@section('content')
<section id="fasilitas" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4"></h2>

        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('fasilitas.create') }}" class="btn btn-primary mt-4 mb-4">Tambah Fasilitas</a>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($fasilitas as $item)
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 rounded">
                    <div class="card-img-top" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('assets/images/' . $item->gambar) }}" class="img-fluid" alt="{{ $item->nama }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold text-center">{{ $item->nama }}</h5>
                        <p class="card-text text-muted text-center" style="flex-grow: 1;">{{ $item->deskripsi }}</p>
                        <div class="mt-auto">
                            @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-warning w-100">Edit</a>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
