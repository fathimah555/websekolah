<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin - SMK Gema Karya Bahana</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Pie chart sedang */
        #myPieChart {
            max-width: 220px !important;
            max-height: 220px !important;
        }

        /* Spasi antar menu sidebar */
        .sidebar-menu .nav-item {
            margin-bottom: 0.75rem; /* kasih jarak antar item */
        }
    </style>
</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block min-vh-100 shadow" style="background-color:#EDA35A;">
            <div class="position-sticky">
                <!-- Header Sidebar -->
                <div class="text-center py-3 border-bottom border-light">
                    <h4 class="fw-bold text-white">Admin Panel</h4>
                </div>

                <!-- Menu -->
                <ul class="nav flex-column px-2 mt-3 sidebar-menu">
                    <li class="nav-item">
                        <a id="dashboardMenu" class="nav-link text-white fw-bold d-flex align-items-center active bg-opacity-25 rounded px-3" href="#">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="guruMenu" class="nav-link text-white d-flex align-items-center px-3" href="#">
                            <i class="bi bi-person me-2"></i> Guru & Tenaga Pendidik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="prestasiMenu" class="nav-link text-white d-flex align-items-center px-3" href="#">
                            <i class="bi bi-trophy me-2"></i> Prestasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="ekskulMenu" class="nav-link text-white d-flex align-items-center px-3" href="#">
                            <i class="bi bi-journal-text me-2"></i> Ekskul
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="eventMenu" class="nav-link text-white d-flex align-items-center px-3" href="#">
                            <i class="bi bi-calendar-event me-2"></i> Events
                        </a>
                    </li>

                    <!-- Logout -->
                    <li class="nav-item mt-4">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="nav-link text-white d-flex align-items-center px-3">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container-fluid py-4">
                
                <!-- Dashboard Content -->
                <div id="dashboardContent">
                    <!-- Header -->
                    <div class="row mb-4">
                        <div class="col">
                            <h1 class="display-6 fw-bold" style="color:#000000;">Selamat Datang, Admin</h1>
                            <p class="text-muted">Kelola semua data sekolah dari panel ini.</p>
                        </div>
                    </div>

                    <!-- Statistik -->
                    <div id="statistikArea" class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-header text-white" style="background-color:#E2A16F;">
                                    <h5 class="m-0">Statistik Siswa</h5>
                                </div>
                                <div class="card-body text-center">
                                    <h3 id="jumlahSiswa" class="fw-bold" style="font-size: 2rem;">0</h3>
                                    <p class="badge text-bg-success" style="font-size: 1rem;">Siswa Terdaftar</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-header text-white" style="background-color:#E2A16F;">
                                    <h5 class="m-0">Distribusi Siswa</h5>
                                </div>
                                <div class="card-body d-flex justify-content-center">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel User -->
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-white" style="background-color:#E2A16F;">
                            <h5 class="m-0">Daftar Pengguna Admin & Operator</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin.settings.create') }}" class="btn mb-3 text-white" style="background-color:#67C090;">
                                <i class="bi bi-plus-circle"></i> Tambah Pengguna
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm align-middle">
                                    <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @foreach($item->roles as $role)
                                                    <span class="badge" style="background-color:#E2A16F;">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.settings.edit', $item->id) }}" class="btn btn-sm border" style="border-color:#E2A16F; color:#E2A16F;">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                @if(auth()->user()->email === 'admin@gmail.com')
                                                    <form action="{{ route('admin.settings.destroy', $item->id) }}" method="POST" class="d-inline"
                                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada pengguna ditemukan.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guru Content -->
                <div id="guruContent" style="display:none;">
                    @include('guru.index', ['gurus' => $gurus, 'isAdmin' => true])
                </div>

                <!-- Prestasi Content -->
                <div id="prestasiContent" style="display:none;">
                    <h2>Prestasi</h2>
                    <p>Konten prestasi di sini.</p>
                </div>

                <!-- Ekskul Content -->
                <div id="ekskulContent" style="display:none;">
                    <h2>Ekskul</h2>
                    <p>Konten ekskul di sini.</p>
                </div>

                <!-- Event Content -->
                <div id="eventContent" style="display:none;">
                    <h2>Event</h2>
                    <p>Konten event di sini.</p>
                </div>

            </div>
        </main>
    </div>
</div>

<!-- Script Statistik & Konten Sidebar -->
<script>
    // Animasi jumlah siswa
    let totalSiswa = 695, count = 0;
    const interval = setInterval(() => {
        if (count < totalSiswa) {
            count++;
            document.getElementById('jumlahSiswa').innerText = count;
        } else {
            clearInterval(interval);
        }
    }, 10);

    // Pie chart
    const data = {
        labels: ['Wirausaha', 'Bekerja', 'Magang', 'Kuliah', 'Pelatihan', 'Mencari Kerja'],
        datasets: [{
            data: [11, 45, 2, 8, 3, 31],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
        }]
    };
    new Chart(document.getElementById('myPieChart'), {
        type: 'pie',
        data: data
    });

    // Function untuk ganti konten
    function showContent(id) {
        const sections = ['dashboardContent', 'guruContent', 'prestasiContent', 'ekskulContent', 'eventContent'];
        sections.forEach(sec => {
            document.getElementById(sec).style.display = (sec === id) ? 'block' : 'none';
        });
    }

    // Event listener menu sidebar
    document.getElementById('dashboardMenu').addEventListener('click', () => showContent('dashboardContent'));
    document.getElementById('guruMenu').addEventListener('click', () => showContent('guruContent'));
    document.getElementById('prestasiMenu').addEventListener('click', () => showContent('prestasiContent'));
    document.getElementById('ekskulMenu').addEventListener('click', () => showContent('ekskulContent'));
    document.getElementById('eventMenu').addEventListener('click', () => showContent('eventContent'));
</script>

</body>
</html>
