<header class="header">
  <div class="container">
    <div class="brand">
      <img src="{{ asset('frontend/image/4smkbogor.png') }}" alt="Logo SMKN 4 Bogor">
      Gallery4
    </div>

    <nav class="navbar">
      <a href="{{ route('home') }}">Beranda</a>

      <div class="dropdown">
        <a href="#">Profil ▾</a>
         <a href="#">Informasi</a>
        
       
        <div class="dropdown-menu">
          <a href="{{ route('tentang') }}">Tentang Sekolah</a>
          <a href="{{ route('visimisi') }}">Visi & Misi</a>
          <a href="{{ route('guru') }}">Agenda Sekolah</a>
        </div>
      </div>

        <a href="#">Galeri</a>
      <a href="#contact">Kontak</a>
      
    </nav>
  </div>
</header>
