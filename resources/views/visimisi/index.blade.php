@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Visi dan Misi</h2>

        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('visimisi.create') }}" class="btn btn-primary mt-4 mb-4">Tambah Visi dan Misi</a>
        @endif

        <div class="row">
            @foreach($visimisi as $item)
                <div class="col-4">
                    <div class="card shadow border-0 rounded">  
                        <div class="card-body text-center">
                            <h5 class="card-title">Visi</h5>
                            <p class="card-text">{{ $item->visi }}</p> <!-- Menampilkan visi -->

                            <h5 class="card-title">Misi</h5>
                            <p class="card-text">
                                @if($item->misi)
                                    {!! nl2br(e($item->misi)) !!} <!-- Menampilkan misi dengan format terpisah -->
                                @else
                                    <span>Tidak ada misi yang ditentukan.</span>
                                @endif  
                            </p>

                            @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                <a href="{{ route('visimisi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('visimisi.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
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
