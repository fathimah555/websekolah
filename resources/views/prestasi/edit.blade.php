@extends('layouts.app')
<title>Edit Prestasi</title>

@section('content')
<div class="container mt-5">
    <h1>Edit Prestasi</h1>

    <form action="{{ route('prestasi.update',$prestasi->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" id="name" name="title" value="{{ $prestasi->title }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Date</label>
            <input type="date" class="form-control" id="name" name="date" value="{{$prestasi->date }}"  required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">description</label>
            <textarea type="text" class="form-control" id="name" name="description" value="{{ $prestasi->description }}"> {{ $prestasi->description }} </textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
