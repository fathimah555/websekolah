@extends('layouts.app')
<title>Tambah jurusan</title>

@section('content')
<div class="container mt-5">
    <h1>Tambah jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Jurusan</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@endsection
