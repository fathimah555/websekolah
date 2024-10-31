@extends('layouts.app')
<title>Tambah jurusan</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">nama</label>
            <input type="text" class="form-control" id="name" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">deskripsi</label>
            <textarea type="text" class="form-control" id="name" name="deskripsi" ></textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
