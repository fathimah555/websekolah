@extends('layouts.app')
@section('title', 'Tambah Visi Misi')

@section('content')
<div class="container mt-5">
    <h1>Tambah Visi Misi</h1>

    <form action="{{ route('visimisi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <input type="text" class="form-control" id="visi" name="visi" required>
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control" id="misi" name="misi" rows="5" placeholder="Masukkan misi di sini..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
