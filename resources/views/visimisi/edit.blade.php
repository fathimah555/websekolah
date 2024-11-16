@extends('layouts.app')
@section('title', 'Edit Visi Misi')

@section('content')
<div class="container mt-5">
    <h1>Edit Visi Misi</h1>

    <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Menyatakan bahwa ini adalah permintaan PUT untuk update -->

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ $prestasi->title }}" class="form-control">
            </div>

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-control" id="visi" name="visi" required>{{ old('visi', $visimisi->visi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control" id="misi" name="misi" required>{{ old('misi', $visimisi->misi) }}</textarea>
        </div>  

        <button type="submit" class="btn btn-primary">Simpan</button> 
    </form>
</div>
@endsection
