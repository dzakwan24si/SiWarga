<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex h-screen bg-gray-50 overflow-hidden">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-900 text-white flex flex-col hidden sm:flex">
                <div class="flex items-center justify-center h-16 border-b border-slate-800">
                    <h1 class="text-2xl font-bold tracking-tight">SiWarga</h1>
                </div>
                <div class="px-4 py-2 text-sm text-slate-400 border-b border-slate-800 text-center uppercase tracking-wider">
                    Role: {{ Auth::user()->role }}
                </div>
                <nav class="flex-1 px-2 py-4 space-y-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('dashboard') ? 'bg-slate-800' : 'hover:bg-slate-800' }} rounded-lg text-white font-medium transition">
                        Dashboard
                    </a>
                    <a href="{{ route('warga.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('warga.*') ? 'bg-slate-800' : 'hover:bg-slate-800' }} rounded-lg text-white font-medium transition">
                        Data Warga
                    </a>
                    @if(Auth::user()->role !== 'warga')
                    <a href="{{ route('pengumuman.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('pengumuman.*') ? 'bg-slate-800' : 'hover:bg-slate-800' }} rounded-lg text-white font-medium transition">
                        Pengumuman
                    </a>
                    @endif
                </nav>
            </aside>

            <!-- Main Content Wrapper -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Top Navbar -->
                @include('layouts.navigation')

                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow-sm z-10">
                        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50">
                    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
