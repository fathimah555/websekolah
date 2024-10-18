@extends('layouts.app')

@section('content')
<section id="ekskul" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4"></h2> <!-- Judul halaman -->
        @if(Auth::user()->roles[0]->name =='admin')
        <a href="{{ route('ekskul.create') }}" class="btn btn-primary mt-4 mb-4">Add</a>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Responsif dengan gutter -->
            @foreach($ekskul as $item)
            <div class="col mb-4 d-flex align-items-stretch"> <!-- d-flex untuk memastikan tinggi kolom sama -->
                <div class="card h-100 shadow border-0 rounded"> <!-- h-100 memastikan kartu memenuhi tinggi kolom -->
                    <!-- Gunakan fungsi asset() untuk merujuk gambar di folder assets -->
                    <img src="{{ asset('assets/images/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center d-flex flex-column"> <!-- flex-column untuk menyusun konten vertikal -->
                        <h5 class="card-title font-weight-bold">{{ $item->nama }}</h5>
                        <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                        <div class="mt-auto"></div> <!-- Spacer untuk menjaga konten tetap teratur -->

                        @if(Auth::user()->roles[0]->name =='admin')
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('ekskul.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-6">
                                <form action="{{ route('ekskul.destroy', $item->id) }}" method="POST">
                                     @csrf
                                     <button type="submit" class="btn btn-danger">Delete</button>
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
