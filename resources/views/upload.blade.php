<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar Event</title>
</head>
<body>
    <h2>Upload Event Baru</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Judul Event" required><br><br>
        <input type="date" name="date" required><br><br>
        <input type="file" name="gambar" required><br><br>
        <button type="submit">Upload</button>
    </form>

    <hr>
    <h3>Daftar Event</h3>

    @foreach($gambars as $gambar)
        <div style="margin-bottom: 20px;">
            <p><strong>Judul:</strong> {{ $gambar->title }}</p>
            <p><strong>Tanggal:</strong> {{ $gambar->date }}</p>

            {{-- FIXED bagian ini --}}
            <img src="{{ asset('storage/gambar/' . $gambar->gambar) }}" alt="{{ $gambar->title }}" width="300">
        </div>
    @endforeach

</body>
</html>
