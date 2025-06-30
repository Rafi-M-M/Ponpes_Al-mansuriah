@extends('layouts.admin')

@section('content_admin')
<style>
  body.bg-admin-register {
    background: url('/img/gambar_depan_pondok.jpeg') no-repeat center center fixed;
    background-size: cover;
  }
  .bg-blur {
    backdrop-filter: blur(2px) brightness(0.95);
    background: rgba(255,255,255,0.7);
    border-radius: 1.5rem;
  }
</style>
<script>
  document.body.classList.add('bg-admin-register');
</script>
<div class="container py-5 mt-5">
  <div class="row justify-content-center align-items-center min-vh-80">
    <div class="col-md-7 col-lg-6">
      <div class="card shadow-lg border-0 rounded-4 p-3 bg-blur">
        <div class="text-center mb-4">
          <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width:70px; height:70px;">
            <i class="bi bi-person-plus fs-1 text-success"></i>
          </div>
          <h3 class="fw-bold text-success mb-0">Register Admin</h3>
        </div>
        {{-- menampilkan pesan error --}}
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        {{-- akhir menampilkan pesan error --}}
        <form method="POST" action="{{ url('/register_admin') }}" autocomplete="off">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="admin@domain.com">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password">
    </div>
    <button type="submit" class="btn btn-success w-100">Register</button>
    <p class="pt-5 text-center">Sudah Punya Akun ? <a href="{{ url('login_admin') }}" class="small text-primary text-black pb-2">Login</a></p>
</form>

      </div>
    </div>
  </div>
</div>
<script>
  window.addEventListener('beforeunload', function() {
    document.body.classList.remove('bg-admin-register');
  });
</script>
@endsection
