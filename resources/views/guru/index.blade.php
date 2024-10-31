@extends('layouts.app')

@section('content')
<section id="guru-tenaga-kependidikan" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Guru Dan Tenaga Kependidikan</h2>
        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
            <a href="{{ route('guru.create') }}" class="btn btn-primary mt-4 mb-4">Tambahkan</a>
        @endif 
        @if($gurus->isEmpty())
            <p class="text-center">Tidak ada data guru yang ditemukan.</p>
        @else
            <!-- Card Kepala Sekolah di bawah Struktur Organisasi -->
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center">
                        @foreach($gurus->where('tipe', 'struktur')->where('jabatan','Kepala Sekolah') as $guru)
                            <div class="card shadow-sm d-flex align-items-center" style="border-radius: 15px; width: 100%; max-width: 300px; margin: 0 10px; margin-bottom: 30px;" data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{ asset($guru->gambar ? $guru->gambar : 'assets/images/default.png') }}" class="card-img-top rounded-circle mx-auto d-block img-fluid mt-3" alt="{{ $guru->nama }}" style="width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $guru->nama }}</h5>
                                    <p class="card-text">{{ $guru->jabatan }}</p>

                                    @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning w-100">Edit</a>
                                            </div>
                                            <div class="col-6">
                                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE') <!-- Menyertakan metode DELETE -->
                                                    <button type="submit" class="btn btn-danger w-90">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif  
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Wakil Kepala Sekolah (Kiri, Tengah, Kanan) -->
            <div class="row mb-5">
                @php
                $wakilKepalaSekolah = $gurus->where('tipe', 'struktur')->where('jabatan', '!=', 'Kepala Sekolah')->values();
                @endphp

                @foreach($wakilKepalaSekolah as $wakil)
                    <div class="col-md-3 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow-sm text-center" style="border-radius: 15px; width: 100%; max-width: 250px; margin: 0 10px;">
                            <img src="{{ asset($wakil->gambar ? $wakil->gambar : 'assets/images/default.png') }}" class="card-img-top rounded-circle mx-auto d-block img-fluid mt-3" alt="{{ $wakil->nama }}" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $wakil->nama }}</h5>
                                <p class="card-text">{{ $wakil->jabatan }}</p>
                                @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                       <div class="row">
                                        <div class="col-6">  
                                            <a href="{{ route('guru.edit', $wakil->id) }}" class="btn btn-warning w-100">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ route('guru.destroy', $wakil->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE') <!-- Menyertakan metode DELETE -->
                                                <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>  
            <!-- Daftar Guru (4 Guru di Bawah) -->
            <h2 class="text-center mb-4"></h2>
                    @foreach($gurus->where('tipe', 'daftar')->take(4) as $guru)
                    <div class="col-md-3 col-sm-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow-sm text-center" style="border-radius: 15px; width: 100%; max-width: 300px; margin: 0 10px;">
                            <img src="{{ asset($guru->gambar ? $guru->gambar : 'assets/images/default.png') }}" class="card-img-top rounded-circle mx-auto d-block img-fluid mt-3" alt="{{ $guru->nama }}" style="width: 120px; height: 120px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $guru->nama }}</h5>
                                <p class="card-text">{{ $guru->jabatan }}</p>
                                @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'admin')
                                    <div class="row">
                                        <div class="col-6">
                                             <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning w-100">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE') <!-- Menyertakan metode DELETE -->
                                                <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
