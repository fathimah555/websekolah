@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pengguna</h1>

        <!-- Menampilkan pesan kesalahan jika ada -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulir untuk mengedit pengguna -->
        <form action="{{ route('admin.settings.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah password.</small>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe</label>
                <select name="tipe" id="tipe" class="form-control" required>
                    <option value="role" {{ old('tipe', $user->tipe) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="operator" {{ old('tipe', $user->tipe) == 'operator' ? 'selected' : '' }}>Operator</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection