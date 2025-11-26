<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookingSystem - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <!-- {{-- Sidebar --}} -->
    <div class="sidebar">
        <div class="logo-section">
            <div class="logo-image"></div>
            <div class="logo-text">
                <h5>BookingSystem</h5>
                <p>Web Peminjaman</p>
            </div>
        </div>
        
        <ul class="sidebar-menu">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">List Peminjaman Barang</a></li>
            <li><a href="#">Daftar Barang</a></li>
            <li><a href="#">CRUD Barang</a></li>
            <li><a href="#">Riwayat Peminjaman</a></li>
            <li><a href="#">List Guru</a></li>
        </ul>
    </div>
    
    <!-- {{-- Top Navbar --}} -->
    <div class="top-navbar">
        <h4>Dashboard</h4>
        <div class="admin-section">
            <span class="admin-name">Admin 1</span>
            <div class="admin-avatar"></div>
        </div>
    </div>
    
    <!-- {{-- Main Content --}} -->
    <div class="main-content">
        <!-- {{-- Statistics Cards --}} -->
        <div class="stats-container">
            <div class="stats-grid">
                <div class="stat-card blue">
                    <h2 class="stat-number">112</h2>
                    <p class="stat-label">Total Barang</p>
                </div>
                
                <div class="stat-card yellow">
                    <h2 class="stat-number">22</h2>
                    <p class="stat-label">Barang Dipinjam</p>
                </div>
                
                <div class="stat-card green">
                    <h2 class="stat-number">89</h2>
                    <p class="stat-label">Barang Tersedia</p>
                </div>
                
                <div class="stat-card pink">
                    <h2 class="stat-number">1</h2>
                    <p class="stat-label">Barang Telat</p>
                </div>
            </div>
        </div>
        
        <!-- {{-- Table Section --}} -->
        <div class="table-section">
            <h5 class="table-title">Daftar Peminjam Terbaru</h5>
            
            <div class="table-wrapper">
                <!-- {{-- Table Header --}} -->
                <div class="table-header">
                    <div class="table-header-row">
                        <span>No.</span>
                        <span>Nama Peminjam</span>
                        <span>Nama Barang</span>
                        <span>Tanggal Meminjam</span>
                        <span>Tanggal Pengembalian</span>
                        <span>Kelas</span>
                    </div>
                </div>
                
                <!-- {{-- Table Body --}} -->
                <div class="table-body">
                    <div class="table-row">
                        <span>1</span>
                        <span>Muhammad Azz...</span>
                        <span>NVIDIA HGX H100</span>
                        <span>Oct 8, 2025</span>
                        <span>Oct 15, 2025</span>
                        <span>10 TKJ</span>
                    </div>
                    
                    <div class="table-row">
                        <span>2</span>
                        <span>Afrizal</span>
                        <span>Kabel USB C</span>
                        <span>Oct 9, 2025</span>
                        <span>Oct 16, 2025</span>
                        <span>11 TKJ 2</span>
                    </div>
                    
                    <div class="table-row">
                        <span>3</span>
                        <span>Meisya</span>
                        <span>Fiber Optic 2m</span>
                        <span>Oct 9, 2025</span>
                        <span>Oct 16, 2025</span>
                        <span>10</span>
                    </div>
                    
                    <div class="table-row">
                        <span>4</span>
                        <span>Timmi</span>
                        <span>Server Instance</span>
                        <span>Oct 10, 2025</span>
                        <span>Oct 17, 2025</span>
                        <span>12</span>
                    </div>
                    
                    <div class="table-row">
                        <span>5</span>
                        <span>Nana</span>
                        <span>Monitor 14inch</span>
                        <span>Oct 11, 2025</span>
                        <span>Oct 15, 2025</span>
                        <span>11</span>
                    </div>
                    
                    <div class="table-row">
                        <span>6</span>
                        <span>Daffa</span>
                        <span>10T SDD</span>
                        <span>Oct 12, 2025</span>
                        <span>Oct 19, 2025</span>
                        <span>12</span>
                    </div>
                    
                    <div class="table-row">
                        <span>7</span>
                        <span>Ahmad</span>
                        <span>Firewall A</span>
                        <span>Oct 12, 2025</span>
                        <span>Oct 19, 2025</span>
                        <span>12</span>
                    </div>
                    
                    <div class="table-row">
                        <span>8</span>
                        <span>John Doe</span>
                        <span>Router</span>
                        <span>Oct 12, 2025</span>
                        <span>Oct 19, 2025</span>
                        <span>12</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>