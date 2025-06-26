<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">PT AWS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
