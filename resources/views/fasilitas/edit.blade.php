@extends('layouts.app')
<title>Edit fasilitas</title>

@section('content')
<div class="container mt-5">
    <h1>Edit fasilitas</h1>

    <form action="{{ route('fasilitas.update',$fasilitas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" id="name" name="nama" value="{{ $fasilitas->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">description</label>
            <textarea type="text" class="form-control" id="name" name="deskripsi" >{{ $fasilitas->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
 