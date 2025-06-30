@extends('layouts.admin')

@section('content_admin')
<link rel="stylesheet" href="{{ asset('css/data_pendaftaran.css') }}">
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
                            <a href="{{ route('admin.dashboard') }}" class="nav-link text-dark fw-semibold">
                                <i class="bi bi-house-door me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.pendaftaran') }}" class="nav-link text-primary fw-semibold">
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
                        <h2 class="display-5 fw-bold text-primary mb-2">Data Pendaftaran</h2>
                        <p class="lead text-secondary">Selamat datang di halaman admin Pondok Pesantren Al-Manshuriyah</p>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- tabel pendaftaran --}}
            <div class="container py-4">
    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Tanggal Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendaftarans as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->hp }}</td>
                                <td>{{ $p->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <form action="{{ route('pendaftaran.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
            {{-- akhir tabel pendaftaran --}}
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
{{-- @endsection --}}