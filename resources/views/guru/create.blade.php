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

        <div class="dropdown mb-3">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Pilih Tipe
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#" onclick="setTipe('Struktur')">Struktur</a></li>
        <li><a class="dropdown-item" href="#" onclick="setTipe('Kepala Sekolah')">Kepala Sekolah</a></li>
    </ul>
</div>
<input type="hidden" name="tipe" id="tipe">

<script>
    function setTipe(value) {
        document.getElementById('tipe').value = value;
        document.getElementById('dropdownMenuButton').textContent = value;
    }
</script>
        <div class="mb-3">
            <label for="name" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="name" name="gambar" >
        </div>       

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
