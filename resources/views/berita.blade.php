@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
  <h2 class="fw-bold text-primary mb-5 text-center">Berita & Acara Terbaru</h2>
  <div class="row g-4 justify-content-center mt-2">
    <div class="col-md-6 col-lg-4 col-auto d-flex justify-content-center">
      <div class="card h-100 shadow-sm border-0 rounded-4">
        <img src="https://akcdn.detik.net.id/community/media/visual/2024/03/14/ponpes-al-manshuriyah-di-kabupaten-tasikmalaya-1_169.jpeg?w=650&q=80" class="card-img-top rounded-top-4" alt="Berita 1" style="height: 180px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <div class="mb-2 text-secondary small"><i class="bi bi-calendar3 me-1"></i> 16 maret 2024</div>
          <h5 class="card-title fw-bold">Menikmati Suasana Ponpes Al Mansuriyah dan Akhlak Anak Penimba Ilmu Agama</h5>
          <p class="card-text flex-grow-1">Suasana khas pesantren langsung terasa mana kala menjejakan kaki di lingkungan Ponpes Al Manshuriyah di Kampung Nanggerang, Desa/Kecamatan Salawu, Kabupaten Tasikmalaya.</p>
          <a href="https://www.detik.com/jabar/jabar-gaskeun/d-7242273/menikmati-suasana-ponpes-al-manshuriyah-dan-akhlak-anak-penimba-ilmu-agama/amp" class="btn btn-outline-primary mt-2">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 col-auto d-flex justify-content-center">
      <div class="card h-100 shadow-sm border-0 rounded-4">
        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" class="card-img-top rounded-top-4" alt="Berita 2" style="height: 180px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <div class="mb-2 text-secondary small"><i class="bi bi-calendar3 me-1"></i> 16 maret 2024</div>
          <h5 class="card-title fw-bold">Ponpes Al Manshuriyah Tasikmalaya, Tempat Tepat Menimba Ilmu Alat</h5>
          <p class="card-text flex-grow-1"> Julukan Tasik sebagai kota santri bukan isapan jempol semata. Di Tasikmalaya berdiri ratusan pondok pesantren (Ponpes) yang tersebar di berbagai wilayah dengan ribuan santri yang setiap hari tekun menimba ilmu agama.</p>
          <a href="https://www.detik.com/jabar/jabar-gaskeun/d-7242234/ponpes-al-manshuriyah-tasikmalaya-tempat-tepat-menimba-ilmu-alat/amp" class="btn btn-outline-primary mt-2">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
