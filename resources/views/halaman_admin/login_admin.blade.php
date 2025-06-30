@extends('layouts.admin')

@section('content_admin')
<style>
  body.bg-admin-login {
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
  document.body.classList.add('bg-admin-login');
</script>
<div class="container py-5 mt-5">
  <div class="row justify-content-center align-items-center min-vh-80">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-lg border-0 rounded-4 p-3 bg-blur">
        <div class="text-center mb-4">
          <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width:70px; height:70px;">
            <i class="bi bi-person-lock fs-1 text-primary"></i>
          </div>
          <h3 class="fw-bold text-primary mb-0">Admin Login</h3>
        </div>
        <form method="POST" action="{{ url('/login_admin') }}">
  @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email / Username</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="admin@domain.com">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
  <p class="text-black text-center pt-4">Belum Punya Akun ? <a href="{{ url('register_admin') }}" class="text-black text-decoration-none"> Register</a></p>
</form>
<a href="{{ url('/home') }}" class="btn btn-outline-secondary w-100 mt-3">Kembali ke Beranda</a>

      </div>
    </div>
  </div>
</div>
<script>
  window.addEventListener('beforeunload', function() {
    document.body.classList.remove('bg-admin-login');
  });
</script>
@endsection
