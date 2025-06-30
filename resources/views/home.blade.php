@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="card">
  <img src="{{ asset('img/gambar_depan_pondok.jpeg') }}" class="card-img img-fluid" alt="..." style="height: 600px; object-fit: cover;">
  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center text-dark">
    
    {{-- Judul utama --}}
    <div class="mb-4">
      <p class="card-text p-1 fw-bold fs-2 text-white bg-opacity-75 px-4 py-2 rounded">
        PONDOK PESANTREN <br> AL-MANSHURIAH <p class="ps-3 text-white">nangerang-Salawu-Tasikmalaya-Jawabarat</p>
      </p>
    </div>

    {{-- Informasi 3 kotak di dalam gambar --}}
    <div class="container d-flex justify-content-start">
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="bg-opacity-75 p-3 rounded shadow-sm h-100 text-white position-relative" style="background-color: #BBA48B;">
            <span class="position-absolute top-0 start-0 m-3 icon" style="margin-bottom: 1.5rem;"><i class="bi bi-journal-text fs-2"></i></span>
            <h5 class="fw-bold text-start mt-5">TENTANG PESANTREN</h5>
            <p class="text-start fs-7">Pesantren adalah lembaga pendidikan Islam yang khas, berbasis asrama (pondok), dengan kiai sebagai pemimpin dan masjid sebagai pusat kegiatan. Pesantren tidak hanya mengajarkan ilmu agama, tetapi juga membentuk karakter santri 
            </p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="bg-opacity-75 p-3 rounded shadow-sm h-100 text-white position-relative" style="background-color: white;">
            <span class="position-absolute top-0 start-0 m-3 icon text-dark" style="margin-bottom: 1.5rem;"><i class="bi bi-journal-text fs-2"></i></span>
            <h5 class="fw-bold text-start mt-5 text-black">TENTANG PESANTREN</h5>
            <p class="text-start text-black">Pesantren adalah lembaga pendidikan Islam yang khas, berbasis asrama (pondok), dengan kiai sebagai pemimpin dan masjid sebagai pusat kegiatan. Pesantren tidak hanya mengajarkan ilmu agama, tetapi juga membentuk karakter santri 
            </p>
          </div>
        </div>
       <div class="col-md-4 mb-3">
          <div class="bg-opacity-75 p-3 rounded shadow-sm h-100 text-white position-relative" style="background-color: #173D62;">
            <span class="position-absolute top-0 start-0 m-3 icon" style="margin-bottom: 1.5rem;"><i class="bi bi-box-seam fs-2"></i></span>
            <h5 class="fw-bold text-start mt-5">TENTANG PESANTREN</h5>
            <p class="text-start">Pesantren adalah lembaga pendidikan Islam yang khas, berbasis asrama (pondok), dengan kiai sebagai pemimpin dan masjid sebagai pusat kegiatan. Pesantren tidak hanya mengajarkan ilmu agama, tetapi juga membentuk karakter santri 
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

{{-- fasilitas --}}
<div class="container mt-5">
  <div class="row align-items-center mb-4">
    <div class="col-sm-4 mb-3 mb-sm-0">
      <h1 class="fw-bold text-primary">Fasilitas</h1>
      <p class="mb-1">Berikut fasilitas <br> PONPES <br><span class="fw-bold">AL-MANSHURIYAH</span></p>
      <p class="text-secondary small">Klik panah untuk melihat fasilitas lainnya &rarr;</p>
    </div>
    <div class="col-sm-8">
      <div id="fasilitasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="https://mtsn2skh.sch.id/wp-content/uploads/2021/11/PAS.jpeg" alt="Ruang Kelas" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">RUANG KELAS</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #f5e9e9 60%, #e9d6d6 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="https://jurnalposmedia.com/wp-content/uploads/2022/07/2612498771.jpg" alt="Perpustakaan" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">PERPUSTAKAAN</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="{{ asset('img/balai_latihan_kerja.jpeg') }}" alt="Balai Latihan Kerja" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">BALAI LATIHAN KERJA</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="https://sma3jogja.sch.id/wp-content/uploads/2020/05/kantin-scaled.jpg" alt="Kantin" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">KANTIN</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="https://smpislampapb.sch.id/wp-content/uploads/2016/03/21interior2.jpg" alt="Aula" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">AULA</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="{{ asset('img/mesjid.jpeg') }}" alt="Mesjid" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">MESJID</strong>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card border-0 shadow-lg rounded-4 text-center align-items-center fasilitas-card mx-auto" style="width: 220px; background: linear-gradient(135deg, #e9d6d6 60%, #d0bfb4 100%);">
              <div class="bg-white rounded-4 p-2 mt-3 mb-2 shadow-sm" style="width: 120px; height: 100px; display: flex; align-items: center; justify-content: center;">
                <img class="img-fluid rounded-3" src="https://lkmfloor.com/wp-content/uploads/elementor/thumbs/%E6%A0%87%E5%87%86%E7%AF%AE%E7%90%83%E5%9C%BA_%E6%9C%A8%E7%BA%B9-qec43yf84eu250czwn0gdeu9v12n1hdvvwe6jhfccs.webp" alt="Lapang Basket" style="max-width: 100%; max-height: 90px; object-fit: cover;">
              </div>
              <strong class="pb-2 text-dark">LAPANG BASKET</strong>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon custom-carousel-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon custom-carousel-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <style>
          .custom-carousel-icon {
            filter: invert(1) grayscale(1) brightness(0.2) !important;
          }
        </style>
      </div>
    </div>
  </div>
</div>

{{-- gambar perkumpulan --}}
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <img src="{{ asset('img/kumpulan.jpeg') }}" alt="Perkumpulan" class="img-fluid rounded-4 shadow-lg w-100" style="max-height: 420px; object-fit: cover; object-position: center;">
    </div>
  </div>
</div>
{{-- akhir gambar perkumpulan --}}

{{-- menikmati suasana pondok --}}
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <div class="d-flex align-items-center mb-3">
            <i class="bi bi-calendar3 me-2 text-primary"></i>
            <span class="small text-secondary">16 Maret 2024</span>
          </div>
          <h3 class="card-title fw-bold mb-3 text-primary">Menikmati Suasana Ponpes Al Manshuriyah dan Akhlak Anak</h3>
          <p class="card-text mb-2">
            <strong class="text-dark">Tasikmalaya</strong> - Suasana khas pesantren langsung terasa mana kala menjejakkan kaki di lingkungan Ponpes Al Manshuriyah di Kampung Nanggerang, Desa/Kecamatan Salawu, Kabupaten Tasikmalaya.
          </p>
          <p class="card-text text-secondary">
            Suara orang mengaji, remaja pria berkain sarung dan berpeci, remaja putri berbusana muslimah dan pemandangan khas pesantren lainnya. Apalagi pesantren di wilayah perbatasan Garut-Tasikmalaya ini relatif terbuka, tidak ada gerbang yang menjadi pembatas lingkungan pesantren dan masyarakat.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- akhir menikmati suasana pondok --}}

<style>
  .fasilitas-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
  }
</style>
{{-- akhir fasilitas --}}



@endsection
