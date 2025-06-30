@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-6 order-2 order-lg-1">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <h3 class="fw-bold mb-4 text-primary">Formulir Pendaftaran Santri Baru</h3>

          {{-- Tampilkan pesan sukses --}}
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          {{-- Tampilkan error validasi --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com">
            </div>

            <div class="mb-3">
              <label for="hp" class="form-label">No. HP</label>
              <input type="text" class="form-control" id="hp" name="hp" placeholder="08xxxxxxxxxx">
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Alamat lengkap"></textarea>
            </div>

            <div class="mb-3">
              <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
              <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal sekolah">
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jk" name="jk">
                  <option selected disabled>Pilih</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
              </div>
            </div>

            <div class="mb-3">
              <label for="file_upload" class="form-label">Upload File (Foto/Dokumen)</label>
              <input class="form-control" type="file" id="file_upload" name="file_upload">
            </div>

            <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
          </form>

        </div>
      </div>
    </div>

    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 d-flex justify-content-center">
      <img src="{{ asset('img/gambar_depan_pondok.jpeg') }}" alt="Pendaftaran Santri" class="img-fluid rounded-4 shadow-lg" style="max-height: 370px; object-fit: cover;">
    </div>
  </div>
</div>
@endsection
