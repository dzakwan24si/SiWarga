<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        @if ($user->role === 'rw')
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-slate-900">Selamat Datang, Pengurus RW</h3>
                <p class="text-gray-600 mt-1">Berikut adalah ringkasan data RW Anda.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Total RT</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Total Warga</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Menunggu Persetujuan</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
            </div>

        @elseif ($user->role === 'rt')
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-slate-900">Selamat Datang, Pengurus RT {{ $user->rt_number }}</h3>
                <p class="text-gray-600 mt-1">Berikut adalah ringkasan data RT Anda.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Total Kepala Keluarga</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Total Warga</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Menunggu Persetujuan</h4>
                    <p class="mt-2 text-3xl font-bold text-slate-900">0</p>
                </div>
            </div>

        @else
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-slate-900">Selamat Datang, {{ $user->name }}</h3>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <p class="text-gray-600">Layanan mandiri warga sedang disiapkan.</p>
            </div>
        @endif

        <!-- Pengumuman Section -->
        <div class="mt-8">
            <h3 class="text-2xl font-bold text-slate-900 mb-6 border-b pb-2">Pengumuman Terbaru</h3>
            
            @if($pengumumans->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($pengumumans as $pengumuman)
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
                            <div class="p-6 flex-1">
                                <h4 class="text-lg font-bold text-slate-900 mb-2">{{ $pengumuman->judul }}</h4>
                                <p class="text-sm text-gray-500 mb-4">{{ $pengumuman->created_at->format('d M Y') }} • Oleh {{ $pengumuman->user->name }}</p>
                                <p class="text-gray-700 whitespace-pre-line line-clamp-4">{{ $pengumuman->konten }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 text-center">
                    <p class="text-gray-500">Belum ada pengumuman saat ini.</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
