@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5 mt-lg-5">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <h3 class="fw-bold mb-4 text-primary">Hubungi Kami</h3>
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="email@domain.com">
            </div>
            <div class="mb-3">
              <label for="kontak" class="form-label">No. Kontak</label>
              <input type="text" class="form-control" id="kontak" placeholder="08xxxxxxxxxx">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-5 d-flex justify-content-center">
      <img src="{{ asset('img/kumpulan.jpeg') }}" alt="Contact Us" class="img-fluid rounded-4 shadow-lg" style="max-height: 350px; object-fit: cover;">
    </div>
  </div>
</div>
@endsection
