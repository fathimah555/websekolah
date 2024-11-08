@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($users->count() > 1)
            <!-- Tombol Tambah Pengguna (Ikon Plus) hanya untuk admin -->
            <a href="{{ route('admin.settings.create') }}" class="btn btn-success">
                 <i class="bi bi-plus-circle"></i> Tambah Pengguna
            </a>
        @endif

        <!-- Daftar Pengguna -->
        <div class="list-group">
            @forelse($users as $item)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $item->name }}</strong><br>
                        <small>{{ $item->email }}</small>
                    </div>

                    <div>
                        <!-- Tombol Edit (Ikon Pencil) -->
                        <a href="{{ route('admin.settings.edit', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>

                        <!-- Tombol Hapus (Ikon Trash) hanya untuk admin -->
                        @if($users->count() > 1)
                            <form action="{{ route('admin.settings.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @empty
                <div class="alert alert-info">Tidak ada pengguna yang ditemukan.</div>
            @endforelse
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
