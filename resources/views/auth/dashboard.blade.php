@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-5">
    <h1>Dashboard Admin</h1>

    <div class="mb-3">
        <h2>Manajemen Data</h2>
        <a href="{{ route('admin.jurusan.index') }}" class="btn btn-primary">Manage Jurusan</a>
        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-primary">Manage Fasilitas</a>
        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-primary">Manage Prestasi</a>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-primary">Manage Berita</a>
    </div>
</div>
    
    <div class="mb-3">
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Berita</a>
    </div>

 
    <table class="table table-striped"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->content, 50) }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image" style="width: 100px;">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
