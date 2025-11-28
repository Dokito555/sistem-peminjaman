<@extends('layouts.app')

@section('title', 'Profile')
@section('page', 'Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush
    

@section('content')

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-tm-green text-white flex-shrink-0 hidden md:flex flex-col transition-all duration-300">
            <!-- Sidebar Header / Logo Area -->
            <div class="p-5 flex items-center space-x-3 border-b border-white/10">
                <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center bg-white overflow-hidden shrink-0">
                    <!-- Placeholder Logo -->
                    <i class="fa-solid fa-graduation-cap text-tm-green text-xl"></i>
                </div>
                <div>
                    <h1 class="font-bold text-sm leading-tight">BookingSystem</h1>
                    <p class="text-xs text-gray-300">Web Peminjaman</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 overflow-y-auto py-4 space-y-1">
                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-gauge"></i></span>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-list-check"></i></span>
                    <span>List Peminjaman Barang</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-box"></i></span>
                    <span>Daftar Barang</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-pen-to-square"></i></span>
                    <span>CRUD Barang</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-clock-rotate-left"></i></span>
                    <span>Riwayat Peminjaman</span>
                </a>

                <a href="#" class="flex items-center px-6 py-3 text-sm hover:bg-white/10 transition-colors text-gray-300 hover:text-white group">
                    <span class="w-6"><i class="fa-solid fa-chalkboard-user"></i></span>
                    <span>List Guru</span>
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT WRAPPER -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden relative">
            
            <!-- HEADER -->
            <header class="h-16 bg-tm-green flex items-center justify-between px-6 md:px-8 text-white shadow-md z-10">
                <!-- Mobile Toggle Button -->
                <button class="md:hidden text-white focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>

                <!-- Page Title -->
                <h2 class="text-xl font-medium tracking-wide ml-2 md:ml-0">Profile</h2>

                <!-- User Info (Top Right) -->
                <div class="flex items-center gap-3">
                    <span class="text-sm font-medium hidden sm:block">Admin 1</span>
                    <img src="https://ui-avatars.com/api/?name=Riki+Meida&background=0D8ABC&color=fff" alt="User" class="w-9 h-9 rounded bg-gray-300 object-cover border border-white/20">
                </div>
            </header>

            <!-- CONTENT SCROLL AREA -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6 md:p-10">
                
                <!-- Profile Container (White Card) -->
                <div class="bg-white rounded shadow-sm w-full min-h-[500px] p-6 md:p-10 relative">
                    
                    <!-- Title inside card -->
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Admin 1</h3>

                    <div class="flex flex-col md:flex-row items-start gap-8">
                        
                        <!-- Profile Image Section -->
                        <div class="flex-shrink-0">
                            <!-- Placeholder image replicating the photo in your reference -->
                            <div class="w-48 h-48 md:w-56 md:h-56 bg-gray-200 rounded overflow-hidden shadow-sm">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="Profile Photo" 
                                     class="w-full h-full object-cover object-center">
                            </div>
                        </div>

                        <!-- Profile Details -->
                        <div class="flex-1 space-y-2 mt-2">
                            <h4 class="text-2xl text-gray-800 font-normal">Riki Meida</h4>
                            <p class="text-lg text-gray-600">rikimeida@gmail.com</p>
                            
                            <!-- Logout Button (Positioned below text or absolutely, doing inline block here for better responsiveness) -->
                            <div class="pt-8">
                                <button onclick="handleLogout()" class="bg-tm-green hover:bg-tm-green-light text-white px-8 py-2.5 rounded text-sm font-medium transition-colors shadow-sm">
                                    Logout
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Script Sederhana -->
    <script>
        function handleLogout() {
            if(confirm('Apakah Anda yakin ingin keluar?')) {
                alert('Logging out...');
                // Di aplikasi nyata, ini akan redirect ke route logout Laravel
                // window.location.href = "/logout";
            }
        }
    </script>

@endsection