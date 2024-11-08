@extends('layouts.app')

@section('content')
<div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required autofocus>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" required>
</div>

<div class="form-group">
    <label for="password_confirmation">Konfirmasi Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
</div>

<!-- Tambahkan Dropdown Role -->
<div class="form-group">
    <label for="role">Role</label>
    <select name="role" id="role" class="form-control" required>
        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
    </select>
</div>

<button type="submit" class="btn btn-primary">Daftar</button>

@endsection
