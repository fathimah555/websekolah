@extends('layouts.app')

@section('content')

@if(session('error'))
    <div class="alert alert-warning" role="alert">
        {{ session('error') }}
    </div>
@endif

<div class="row min-vh-100 justify-content-center align-items-center">
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="w-100" style="max-width: 400px; margin-top: 100px;">
            <div class="card shadow-lg" style="border-radius: 15px;" id="loginCard" data-error="{{ session('error') ? 'true' : 'false' }}">
                <div class="card-body">
                    <h1 class="text-center mb-4" style="font-family: 'Arial', sans-serif; font-weight: bold;">Login</h1>
                    <form method="POST" action="{{ route('admin.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required style="border-radius: 10px;">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required style="border-radius: 10px;">
                        </div>
                        <button type="submit" class="btn btn-warning w-100" style="border-radius: 10px; transition: background-color 0.3s;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Bootstrap untuk Hitung Mundur -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Login Gagal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Silahkan tunggu 60 detik sebelum mencoba lagi.
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil data-error dari elemen dengan id 'loginCard'
        const hasError = document.getElementById('loginCard').getAttribute('data-error') === 'true';
        
        if (hasError) {
            const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();

            // Hitung mundur 1 menit
            let countdown = 60;
            const modalBody = document.querySelector('.modal-body');
            const countdownInterval = setInterval(() => {
                if (countdown > 0) {
                    modalBody.innerText = `Silahkan tunggu ${countdown} detik sebelum mencoba lagi`;
                    countdown--;
                } else {
                    clearInterval(countdownInterval);
                    modalBody.innerText = 'Silahkan coba login kembali';
                }
            }, 1000);
        }
    });
</script>

@endsection
