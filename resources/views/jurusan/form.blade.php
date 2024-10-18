@extends('layouts.admin')

@section('title', $isEdit ? 'Edit Jurusan' : 'Tambah Jurusan')

@section('content')
<div class="container mt-5">
    <h1>{{ $isEdit ? 'Edit Jurusan' : 'Tambah Jurusan' }}</h1>

    <form action="{{ $isEdit ? route('admin.jurusan.update', $jurusan->id) : route('admin.jurusan.store') }}" method="POST">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $isEdit ? $jurusan->name : '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
