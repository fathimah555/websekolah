@extends('layouts.app')
<title>Edit guru</title>

@section('content')
<div class="container mt-5">
    <h1>Edit guru</h1>

    <form action="{{ route('guru.update',$guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="name" name="nama" value="{{ $guru->nama }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="name" name="jabatan" value="{{ $guru->jabatan }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="name" name="tipe" value="{{ $guru->tipe }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
