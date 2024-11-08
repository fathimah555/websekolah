@extends('layouts.app')
<title>Edit Jurusan</title>

@section('content')
<div class="container mt-5">
    <h1>Edit Jurusan</h1>

    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Menambahkan metode PUT untuk update -->

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" value="{{ $jurusan->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $jurusan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="gambar">
            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
