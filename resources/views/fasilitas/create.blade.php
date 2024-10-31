@extends('layouts.app')
<title>Tambah fasilitas</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah fasilitas</h1>

    <form action="{{ route('fasilitas.store') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="name" name="deskripsi" >
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
