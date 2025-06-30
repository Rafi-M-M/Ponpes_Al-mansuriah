@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-lg-6 order-2 order-lg-1">
      <h2 class="fw-bold text-primary mb-3">Profil Ponpes Al-Manshuriyah</h2>
      <p class="mb-3 text-secondary">
        Berdiri pada 12 Mei 1961 M oleh Al Maghfurlah Drs. K.H. Atang Manshur. Diantara hal yang mendasari berdirinya pondok pesantren Al-Manshuriyah adalah amanah dari ayahanda beliau yakni Al-Maghfurlah KH Manshur disertai restu guru beliau saat mondok di Cipasung yakni Syaikhuna KH Ruhiyat. Selain itu, pendirian pondok pesantren Al-Manshuriyah juga untuk memenuhi kebutuhan masyarakat akan lembaga keagamaan.
      </p>
      <ul class="list-group list-group-flush mb-3">
        <li class="list-group-item bg-transparent px-0"><strong>Didirikan:</strong> 1961</li>
        <li class="list-group-item bg-transparent px-0"><strong>Pimpinan:</strong> Drs. K.H Atang Manshur</li>
        <li class="list-group-item bg-transparent px-0"><strong>Santri:</strong> &plusmn; 230 orang</li>
        <li class="list-group-item bg-transparent px-0"><strong>Alamat:</strong> Kp. Nanggerang, Salawu, Tasikmalaya</li>
      </ul>
      <p class="mb-0">Kami membuka pendaftaran santri baru setiap tahun ajaran. Mari bergabung dan tumbuh bersama keluarga besar Al-Manshuriyah!</p>
    </div>
    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 d-flex justify-content-center">
      <img src="{{ asset('img/gambar_depan_pondok.jpeg') }}" alt="Profil Ponpes" class="img-fluid rounded-4 shadow-lg" style="max-height: 350px; object-fit: cover;">
    </div>
  </div>
</div>
@endsection
