@extends('layouts.app')

@section('content')
<!-- <div class="container-fluid" style="background-image: url('assets/images/sekolah2.jpg'); background-size: cover; background-position: center; min-height: 100vh;"> -->
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="w-100" style="max-width: 400px; margin-top: 100px;">
                <div class="card shadow-lg" style="border-radius: 15px;">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const card = document.querySelector('.card');
        card.style.opacity = 0;
        card.style.transform = 'translateY(20px)';

        setTimeout(() => {
            card.style.opacity = 1;
            card.style.transform = 'translateY(0)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        }, 100);
    });

    // Animasi pada input saat fokus
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.boxShadow = '0 0 5px rgba(255, 165, 0, 0.5)';
        });
        input.addEventListener('blur', () => {
            input.style.boxShadow = 'none';
        });
    });
</script>
@endsection
