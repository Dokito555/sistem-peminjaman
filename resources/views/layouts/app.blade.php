<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BookingSystem')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stack('styles')

</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <div class="logo-section">
            <div class="logo-image"></div>
            <div class="logo-text">
                <h5>BookingSystem</h5>
                <p>Web Peminjaman</p>
            </div>
        </div>

        <ul class="sidebar-menu">
    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="{{ request()->routeIs('peminjaman.index') ? 'active' : '' }}">
        <a href="#">List Peminjaman Barang</a>
    </li>

    <li class="{{ request()->routeIs('barang.index') ? 'active' : '' }}">
        <a href="">Daftar Barang</a>
    </li>

    <li class="{{ request()->routeIs('barang.crud') ? 'active' : '' }}">
        <a href="">CRUD Barang</a>
    </li>

    <li class="{{ request()->routeIs('riwayat.index') ? 'active' : '' }}">
        <a href="">Riwayat Peminjaman</a>
    </li>

    <li class="{{ request()->routeIs('guru.index') ? 'active' : '' }}">
        <a href="">List Guru</a>
    </li>
</ul>

    </div>
    {{-- Navbar --}}
    <div class="top-navbar">
        <h4>@yield('page')</h4>
        <div class="admin-section">
            <span class="admin-name">Admin 1</span>
            <div class="admin-avatar"></div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="main-content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>