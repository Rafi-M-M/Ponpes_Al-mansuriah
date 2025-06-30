<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar bg-white navbar-expand-lg fixed-top navbar-main-fixed text-white p-1">
  <div class="container">
     <a class="navbar-brand" href="#">
      <img src="{{ asset('img/Logo.jpeg') }}" alt="Bootstrap" width="50" height="50" class="rounded-circle" >
       Ponpes Al-Manshuriyah
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-white" >
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/profil') }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/berita') }}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/pendaftaran') }}">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/login_admin') }}" class="btn btn-outline-primary nav-link px-3 ms-2">Admin</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>