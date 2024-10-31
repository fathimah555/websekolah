<!-- resources/views/jurusan/show.blade.php -->

@extends('layouts.app')

@section('title', 'Detail Jurusan')

@section('content')
<div class="container mt-4 py-4">
    <h1 class="text-center">{{ $jurusan->nama }}</h1>
    <img src="{{ asset('assets/images/' . $jurusan->gambar) }}" class="img-fluid" alt="{{ $jurusan->nama }}">
    <p class="mt-4">{{ $jurusan->deskripsi }}</p>
    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
