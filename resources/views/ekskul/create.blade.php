@extends('layouts.app')
<title>Tambah Guru</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah Ekskul</h1>

    <form action="{{ route('ekskul.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Deskripsi</label>
            <textarea type="text" class="form-control" id="name" name="deskripsi" ></textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
