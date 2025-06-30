@extends('layouts.admin')

@section('content_admin')
<link rel="stylesheet" href="{{ asset('css/home_admin.css') }}">
<script>
    document.body.classList.add('bg-admin-dashboard');
</script>
<div class="container-fluid min-vh-100 py-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="card shadow border-0 h-100 sticky-top bg-blur-admin" style="top: 90px;">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-person-circle display-4 text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-1">{{ Auth::user()->nama ?? 'Admin' }}</h5>
                    <p class="text-muted small mb-4">Administrator</p>
                    <hr>
                    <ul class="nav flex-column text-start">
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link text-primary fw-semibold">
                                <i class="bi bi-house-door me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.pendaftaran') }}" class="nav-link text-secondary">
                                <i class="bi bi-file-earmark-text me-2"></i>Data Pendaftaran
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger w-100">
                                    <i class="bi bi-box-arrow-right me-2"></i>Keluar
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="bg-blur-admin p-4">
                        <h2 class="display-5 fw-bold text-primary mb-2">Dashboard Admin</h2>
                        <p class="lead text-secondary">Selamat datang di halaman admin Pondok Pesantren Al-Manshuriyah</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow border-0 h-100 bg-blur-admin">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill display-4 text-info mb-2"></i>
                            <h5 class="card-title">Santri</h5>
                            <p class="card-text fs-4 fw-bold">120</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow border-0 h-100 bg-blur-admin">
                        <div class="card-body text-center">
                            <i class="bi bi-person-badge-fill display-4 text-success mb-2"></i>
                            <h5 class="card-title">Pengajar</h5>
                            <p class="card-text fs-4 fw-bold">25</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow border-0 h-100 bg-blur-admin">
                        <div class="card-body text-center">
                            <i class="bi bi-building display-4 text-warning mb-2"></i>
                            <h5 class="card-title">Fasilitas</h5>
                            <p class="card-text fs-4 fw-bold">10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow border-0 h-100 bg-blur-admin">
                        <div class="card-body text-center">
                            <i class="bi bi-newspaper display-4 text-danger mb-2"></i>
                            <h5 class="card-title">Berita</h5>
                            <p class="card-text fs-4 fw-bold">8</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card shadow border-0 bg-blur-admin">
                        <div class="card-header bg-primary text-white">
                            <i class="bi bi-graph-up-arrow me-2"></i>Statistik Pendaftaran
                        </div>
                        <div class="card-body">
                            <canvas id="chartPendaftaran" height="120"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card shadow border-0 h-100 bg-blur-admin">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-bell-fill me-2"></i>Notifikasi
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">3 pendaftar baru hari ini</li>
                                <li class="list-group-item">1 pesan masuk belum dibaca</li>
                                <li class="list-group-item">Update data santri berhasil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('beforeunload', function() {
        document.body.classList.remove('bg-admin-dashboard');
    });
</script>
@endsection

@push('scripts')
<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartPendaftaran').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Pendaftar',
                data: [12, 19, 13, 15, 22, 30, 25, 18, 20, 24, 28, 32],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush
