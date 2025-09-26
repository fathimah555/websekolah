<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>
<body>
<div class="container">
    <h2 class="display-4 text-center mb-4">Berita</h2>

    <!-- Hanya tampilkan tombol tambah berita untuk operator -->
    @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'operator')
    <div class="mb-3">
        <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Berita</a>
    </div>
    @endif

    <div class="row">
        @foreach($berita as $item)
        <div class="col-md-4 mb-3" data-aos="zoom-in">
            <div class="card h-100 shadow border-light rounded">
                <img src="{{ asset('assets/images/' . ($item->gambar ?? 'default-image.jpg')) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text d-flex align-items-center justify-content-center" style="min-height: 60px;">{{ Str::limit($item->description, 100) }}</p>

                    <!-- Menampilkan tag -->
                    @if($item->tags)
                        <div class="tags">
                            @foreach($item->tags as $tag)
                                <span class="badge bg-secondary">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="card-footer text-muted text-center">
                    <small>Diposting pada {{ $item->created_at->format('d M Y') }}</small>
                    <div class="mt-2">
                        <button class="btn btn-warning w-100 text-white" data-bs-toggle="modal" data-bs-target="#newsModal" 
                                data-title="{{ $item->title }}" 
                                data-description="{{ $item->description }}" 
                                data-image="{{ asset('assets/images/' . $item->gambar) }}">
                            Baca Selengkapnya
                        </button>

                        <!-- Hanya tampilkan opsi edit dan hapus untuk operator -->
                        @if(Auth::check() && Auth::user()->roles->isNotEmpty() && Auth::user()->roles[0]->name == 'operator')
                        <div class="mt-2">
                            <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning w-100">Edit</a>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">Hapus</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  
            <div class="modal-body">
                <img src="" class="img-fluid mb-3" id="modalImage" alt="">
                <p id="modalDescription"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const newsModal = document.getElementById('newsModal');
    newsModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget; // Tombol yang mengaktifkan modal
        const title = button.getAttribute('data-title');
        const description = button.getAttribute('data-description');
        const image = button.getAttribute('data-image');

        const modalTitle = newsModal.querySelector('.modal-title');
        const modalDescription = newsModal.querySelector('#modalDescription');
        const modalImage = newsModal.querySelector('#modalImage');

        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modalImage.src = image;
    });
</script>
</body>
</html>