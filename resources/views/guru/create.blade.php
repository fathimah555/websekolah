@extends('layouts.app')
<title>Tambah guru</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah guru</h1>

    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        
        <div class="mb-3">
            <label for="name" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="name" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="name" name="jabatan" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="name" name="tipe" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
