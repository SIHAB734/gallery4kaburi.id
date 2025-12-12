<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'SMKN 4 Bogor')</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <!-- Tambahkan di layout utama (main.blade.php) -->
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
  <script>const lightbox = GLightbox({ selector: '.glightbox' });</script>


  <link rel="stylesheet" href="{{ asset('frontend/image/css/style.css') }}"> <!-- CSS eksternal -->
</head>
<body>
  @include('frontend.partials.header')  <!-- panggil header -->

  <main>
    @yield('content')  <!-- tempat konten halaman -->
  </main>

  @include('frontend.partials.footer')  <!-- panggil footer -->


  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Swiper Init Script -->
<script>
  document.querySelectorAll('.init-swiper').forEach(function(swiperEl) {
    const configEl = swiperEl.querySelector('.swiper-config');
    if (configEl) {
      const config = JSON.parse(configEl.textContent);
      new Swiper(swiperEl, config);
    }
  });
</script>

</body>
</html>
