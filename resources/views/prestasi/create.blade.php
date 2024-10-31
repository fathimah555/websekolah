@extends('layouts.app')
<title>Tambah Prestasi</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah Prestasi</h1>

    <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data"> <!-- Tambahkan enctype -->
        @csrf
    
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*"> <!-- Tambahkan accept -->
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
