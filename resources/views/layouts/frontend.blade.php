  <!doctype html>
  <html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Galeri Sekolah')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
    :root {
      --primary: #0F172A;
      --muted: #f3f4f6;
      --card-shadow: 0 6px 18px rgba(50,50,93,.08);
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      background: #fff  ;
      color: #222;
    }

    /* ===== HEADER ===== */
    .header {
      background: var(--primary);
      color: #fff;
      padding: 12px 0;
    }

    .header .container {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      max-width: 1200px;
      margin: auto;
      padding: 0 40px;
      gap: 80px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 700;
      font-size: 20px;
    }

    .brand img {
      width: 55px;
      height: 55px;
      object-fit: contain;
    }

    .navbar {
      display: flex;
      align-items: center;
      gap: 25px;
      flex-wrap: wrap;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #0f6de8ff;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background: #fff;
      min-width: 200px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
      border-radius: 8px;
      padding: 10px 0;
      display: none;
      z-index: 999;
    }

    .dropdown-menu a {
      display: block;
      padding: 10px 16px;
      color: #333;
      text-decoration: none;
      font-weight: 400;
    }

    .active-link {
  color: #0f6de8ff !important;
  font-weight: 600;
}
    
    .dropdown:hover .dropdown-menu {
      display: block;
    }

   


    /* ===== HERO GALERI ===== */
    .hero-galeri {
      position: relative;
      background: url('{{ asset("frontend/image/sekolah4.jpg") }}') center/cover no-repeat;
      height: 85vh;
      display: flex;
      justify-content: center;
      align-items: center;
      animation: fadeIn 1.3s ease;
    }

    .hero-overlay {
      background: rgba(255, 255, 255, 0.85);
      padding: 60px 80px;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      text-align: center;
      animation: zoomIn 1.2s ease;
    }

    .hero-content h1 {
      font-size: 42px;
      color: #0c2d57;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .hero-content p {
      font-size: 18px;
      color: #333;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes zoomIn {
      from { transform: scale(0.9); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }

    /* ===== CONTACT SECTION ===== */
    .contact-section {
      background: var(--muted);
      padding: 60px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-title h2 {
      font-size: 28px;
      color: var(--primary);
      margin-bottom: 8px;
    }

    .map-container {
      width: 100%;
      max-width: 1000px;
      height: 400px;
      margin: 0 auto 40px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--card-shadow);
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .contact-content {
      max-width: 1000px;
      margin: auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }

    .contact-info .info-item {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: var(--card-shadow);
    }

    .contact-info .info-item i {
      font-size: 28px;
      color: var(--primary);
      margin-bottom: 10px;
      display: block;
    }

    .php-email-form input,
    .php-email-form textarea {
      width: 100%;
      padding: 10px 14px;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      font-family: 'Poppins', sans-serif;
    }

    .php-email-form button {
      background: var(--primary);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 500;
    }

    .php-email-form button:hover {
      background: #2563eb;
    }

    /* ===== FOOTER ===== */
    .footer {
      background-color: #0D1B2A;
      color: #fff;
      padding: 50px 0 20px;
      font-family: 'Poppins', sans-serif;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.2);
      font-size: 13px;
      color: #ddd;
      margin-top: 25px;
    }

    .footer-bottom span {
      color: #ffd700;
      font-weight: 600;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 900px) {
      .header .container {
        flex-direction: column;
        gap: 20px;
        text-align: center;
      }

      .navbar {
        justify-content: center;
      }

      .hero-galeri {
        height: 60vh;
        padding: 20px;
      }

      .hero-overlay {
        padding: 30px 20px;
      }

      .hero-content h1 {
        font-size: 30px;
      }

      .contact-content {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .map-container {
        height: 300px;
      }
    }
    </style>
  </head>
  <body>
    <!-- ===== HEADER ===== -->
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
 <a href="{{ route('home') }}#foto-terbaru">Galeri</a>
      <div class="dropdown-menu">
        <a href="{{ route('tentang') }}">Tentang Sekolah</a>
        <a href="{{ route('visimisi') }}">Visi & Misi</a>
        <a href="{{ route('guru') }}">Agenda Sekolah</a>
      </div>
    </div>

      <a href="#informasi">Informasi</a>
  


          <a href="#contact">Kontak</a>
       

        </nav>
      </div>
    </header>

    <!-- ===== HERO GALERI ===== -->
 @if (!request()->is('galeri/*'))
<section class="hero-galeri">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Galeri Web SMKN 4</h1>
      <p>"Abadikan di setiap momen mu disekolah ini"</p>

      <a href="{{ route('login') }}"
         style="margin-top:15px;display:inline-block;padding:10px 22px;background:#7a3cff;color:white;border-radius:8px;text-decoration:none;font-weight:600;">
         Login 
      </a>

    </div>
  </div>
</section>
@endif



    <main class="container">
      @yield('content')
    </main>

{{-- Tambahkan ini di file home.blade.php di bagian @yield('content') --}}

<!-- ===== SECTION INFORMASI (GALSEKO) ===== -->
<section id="informasi" style="padding:80px 0; background:#f8fafc;">
    <div class="container" style="max-width:1150px; display:flex; flex-wrap:wrap; gap:40px; align-items:center; justify-content:center;">

        <!-- GAMBAR -->
        <div style="flex:1; min-width:300px;">
            <img src="{{ asset('frontend/image/BalonFour.jpg') }}" 
                 alt="Gallery4 App" 
                 style="width:100%; border-radius:20px; box-shadow:0 6px 18px rgba(0,0,0,0.12); transition: transform 0.3s;">
        </div>

        <!-- TEKS INFORMASI -->
        <div style="flex:1; min-width:300px;">
            <h2 style="color:#0f6de8ff; font-size:34px; font-weight:700; margin-bottom:20px;">
                Informasi Aplikasi Gallery4
            </h2>

            <p style="line-height:1.7; font-size:16px; color:#333; margin-bottom:15px;">
               Gallery4 hadir untuk mengabadikan setiap momen: senyum siswa saat upacara, sorak sorai saat lomba, tawa bersama teman-teman di kelas, bahkan tetesan haru saat perpisahan.
            </p>

            <p style="line-height:1.7; font-size:16px; color:#333; margin-bottom:25px;">
             Aplikasi ini memungkinkan siswa, guru, dan seluruh warga sekolah untuk menyimpan foto dan video kegiatan kapan saja. Dengan Gallery4, Kenangan hari ini adalah cerita besok.
            </p>
            
            
        </div>

    </div>
</section>

<style>
    #informasi img:hover {
        transform: scale(1.05);
    }

    #informasi button:hover {
        background:#1558b0;
    }

    @media (max-width:900px) {
        #informasi {
            padding:60px 20px;
        }
        #informasi h2 {
            font-size:28px;
            text-align:center;
        }
        #informasi div[style*="flex:1;"]:last-child {
            text-align:center;
        }
        #informasi a button {
            width:100%;
        }
    }
</style>



    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="contact-section">
      <div class="container section-title">
        <h2>Contact</h2>
        <p>Lokasi SMKN 4 Bogor</p>
      </div>

      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.04983961244!2d106.82211897301!3d-6.640733393353789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMKN%204%20Bogor!5e0!3m2!1sen!2sus!4v1757995980430!5m2!1sen!2sus"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container contact-content">
        <div class="contact-info">
          <div class="info-item">
            <i class="bi bi-geo-alt"></i>
            <h3>Lokasi</h3>
            <p>Kampung Buntar, Kelurahan Muarasari</p>
          </div>

          <div class="info-item">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+62 8953-8328-5321</p>
          </div>

          <div class="info-item">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>smkn4bogor@sch.id</p>
          </div>
        </div>

       <form onsubmit="sendToWhatsApp(event)" class="php-email-form">
  <input type="text" id="name" placeholder="Your Name" required>
  <input type="email" id="email" placeholder="Your Email" required>
  <input type="text" id="subject" placeholder="Subject" required>
  <textarea id="message" rows="4" placeholder="Message" required></textarea>
  <button type="submit">Send Message</button>
</form>

<script>
function sendToWhatsApp(event) {
    event.preventDefault(); // Supaya form tidak reload halaman

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;

    // Nomor WhatsApp kamu (pakai format internasional)
    let phone = "62895383285321"; 

    let text = 
`Halo, saya ingin mengirim pesan:
Nama: ${name}
Email: ${email}
Subjek: ${subject}
Pesan: ${message}`;

    let url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;

    window.open(url, "_blank"); // Buka WhatsApp
}
</script>
</section>
    <!-- ===== FOOTER ===== -->
    <footer class="footer">
      <div class="footer-bottom">
        <p>© 2025 — SMKN 4 Kota Bogor. All Rights Reserved</p>
        <p>Support by <span>M.Sihab Budin XI PPLG 2</span></p>
      </div>
    </footer>
  </body>
  </html>
