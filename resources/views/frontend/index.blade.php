@extends('layouts.frontend')
@section('title','Beranda - Galeri Sekolah')
@section('content')

<style>
  body {
    background: #f4f7ff;
  }

  /* ===== Hero Section ===== */
  .hero {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 25px;
    margin: 30px auto 10px;
    align-items: start;
    max-width: 1200px;
  }

  .banner.card {
    background: #eaf3ff;
    text-align: center;
    border-radius: 16px;
    padding: 35px 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }

  .banner.card h2 {
    color: #003366;
    font-weight: 700;
    font-size: 24px;
    margin-bottom: 8px;
  }

  .banner.card p {
    color: #555;
    font-size: 15px;
  }

  .side.card {
    background: #fff;
    border-radius: 14px;
    padding: 18px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  }

  .side.card + .side.card {
    margin-top: 20px;
  }

  .side.card h4 {
    color: #003366;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .side.card p {
    font-size: 14px;
    color: #555;
  }

  /* ===== Judul Galeri ===== */
  h3 {
    color: #003366;
    font-weight: 700;
    margin-top: 60px;
    margin-bottom: 20px;
    text-align: left;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    border-left: 5px solid #003366;
    padding-left: 12px;
  }

    /* ===== Grid Galeri ===== */
    . galeri-section {
      background: #eaf3ff;
      padding: 50px 0 70px;
    }

 /* ===== Grid utama ===== */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* kotak lebih kecil */
  gap: 15px;
  justify-content: start; /* posisi grid agak ke kiri */
  max-width: 700px; /* grid lebih kecil */
  margin: 0 auto;
  padding: 0 10px;
}

.grid .card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 3px 10px rgba(0,0,0,0.12);
  transition: all 0.25s ease;
}

.grid .card:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

/* Biar gambar persegi dan penuh */
.grid .card a {
  display: block;
  width: 100%;
  aspect-ratio: 1 / 1; /* persegi */
  overflow: hidden;
}

.grid .card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.3s ease;
}

.grid .card:hover img {
  transform: scale(1.05);
}

/* Teks di dalam kotak */
.grid .card h4 {
  color: #003366;
  font-size: 14px;
  font-weight: 600;
  margin: 8px 12px 4px;
}

.grid .card p {
  color: #666;
  font-size: 12px;
  margin: 0 12px 10px;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
  .grid {
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    max-width: 90%;
  }
}

@media (max-width: 600px) {
  .grid {
    grid-template-columns: 1fr; /* HP */
    max-width: 100%;
  }
}
</style>

<!-- Galeri -->
<section class="galeri-section">
  <div id="foto-terbaru">
    <h2></h2>
</div>
  <h2 id="foto-terbaru" class="section-title"></h2>
  <h3>Galeri Kami</h3>
  <div class="grid">
    @foreach($galeri as $g)
      <div class="card">
        <a href="{{ route('galeri.show',$g->id) }}">
          <img src="{{ asset('storage/'.$g->gambar) }}" alt="{{ $g->judul }}">
        </a>
        <h4>{{ $g->judul }}</h4>
        <p>{{ \Illuminate\Support\Str::limit($g->deskripsi,80) }}</p>
      </div>
    @endforeach
  </div>
</section>

@endsection
