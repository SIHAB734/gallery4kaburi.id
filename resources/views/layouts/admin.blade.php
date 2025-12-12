<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title', 'Dashboard Admin')</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<style>
:root {
    --primary: #7a3cff;
    --muted: #f8fafc;
}
body {
    font-family: 'Poppins', sans-serif;
    background: var(--muted);
    overflow-x: hidden;
}

/* NAVBAR */
.navbar-custom {
    background: var(--primary);
    color: #fff;
    padding: 10px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2000;
}
.navbar-custom h5 {
    margin: 0;
    font-weight: 600;
}
.navbar-custom .hamburger {
    background: none;
    border: none;
    color: #fff;
    font-size: 22px;
    cursor: pointer;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    position: fixed;
    top: 0;
    left: -240px;
    height: 100%;
    background: #fff;
    padding: 20px;
    border-right: 1px solid #eee;
    transition: all 0.3s ease;
    z-index: 3000;
}
.sidebar.show {
    left: 0;
}
.sidebar h5 {
    font-weight: 600;
}
.sidebar .nav-link {
    color: #333;
    transition: color 0.2s ease;
}
.sidebar .nav-link:hover {
    color: var(--primary);
}
.sidebar .nav-link.active {
    color: var(--primary);
    font-weight: 600;
}

/* OVERLAY */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.2);
    display: none;
    z-index: 2500;
}
.overlay.show {
    display: block;
}

/* CONTENT */
.content {
    margin-top: 80px;
    padding: 28px;
    margin-left: 80px;
    transition: margin-left 0.3s ease;
}
.sidebar.show ~ .content {
    margin-left: 260px;
}

/* DASHBOARD CARDS */
.dashboard-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
}
.card-dashboard {
    flex: 1 1 120px;
    padding: 25px;
    border-radius: 15px;
    color: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.card-blue {
    background-color: #3b82f6;
}
.card-green {
    background-color: #10b981;
}
.card-dashboard h5 {
    font-weight: 500;
}
.card-dashboard h2 {
    font-weight: 700;
    margin-top: 10px;
}

/* TOAST */
.toast-success {
    position: fixed;
    right: 18px;
    top: 18px;
    background: #dff3ff;
    padding: 12px;
    border-radius: 8px;
    border-left: 4px solid var(--primary);
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar-custom">
    <button class="hamburger" id="toggleSidebar">&#9776;</button>
    <h5>INVENTORY SMKN 4 BOGOR</h5>
    <div class="dropdown">
        <a class="text-white text-decoration-none dropdown-toggle" href="#" id="navbarUser" data-bs-toggle="dropdown">
            Nama Admin
     <a class="dropdown-item"
   href="#"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    </div>
</nav>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebarMenu">
    <h5>ADMIN</h5>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/galeri*') ? 'active' : '' }}" href="{{ route('admin.galeri.index') }}">Data Galeri</a>
        </li>

        <!-- MENU LOGOUT -->
        <li class="nav-item">
            <a class="nav-link text-danger"
               href="#"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
    </ul>

    <!-- FORM LOGOUT TERSEMBUNYI -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<!-- OVERLAY -->
<div class="overlay" id="overlay"></div>

<!-- CONTENT -->
<div class="content" id="mainContent">

    @if(session('success'))
        <div class="toast-success">{{ session('success') }}</div>
    @endif

  
    {{-- Konten halaman --}}
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById('sidebarMenu');
    const overlay = document.getElementById('overlay');
    const toggle = document.getElementById('toggleSidebar');

    if (toggle && sidebar && overlay) {
        toggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', function() {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // Hilangkan notifikasi otomatis
    setTimeout(() => {
        const toast = document.querySelector('.toast-success');
        if (toast) toast.remove();
    }, 3000);
});
</script>

</body>
</html>
