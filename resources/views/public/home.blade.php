@extends('layouts.public-static')

@section('content')
    {{-- Hero Section with Video Background --}}
    <section class="relative h-[90vh] min-h-[600px] overflow-hidden">
        {{-- Video Background --}}
        <div class="absolute inset-0">
            <video
                id="hero-video"
                src="/videos/video-1.mp4"
                autoplay
                muted
                playsinline
                class="h-full w-full object-cover"
            ></video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
        </div>

        {{-- Video control --}}
        <button
            id="video-toggle"
            class="absolute bottom-6 right-6 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-white/20 text-white backdrop-blur-sm transition-all hover:bg-white/30"
        >
            <svg id="icon-pause" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="14" y="4" width="4" height="16" rx="1"/><rect x="6" y="4" width="4" height="16" rx="1"/></svg>
            <svg id="icon-play" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><polygon points="6 3 20 12 6 21 6 3"/></svg>
        </button>

        {{-- Hero Content --}}
        <div class="relative z-10 flex h-full items-center">
            <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl">
                    <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 backdrop-blur-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-400"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.77 4 4 0 0 1 0 6.76 4 4 0 0 1-4.78 4.77 4 4 0 0 1-6.74 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>
                        <span class="text-sm font-medium text-white">Fasilitator Properti Terpercaya</span>
                    </div>
                    <h1 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Temukan Properti
                        <span class="bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent">Impian Anda</span>
                        di Jakarta
                    </h1>
                    <p class="mt-4 max-w-xl text-lg leading-relaxed text-white/80 sm:text-xl">
                        Kami membantu Anda dari pencarian properti hingga serah terima sertifikat, dengan transparansi penuh dan keamanan hukum.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#search" id="scroll-to-search" class="inline-flex items-center rounded-md bg-emerald-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-emerald-700">
                            Mulai Cari Properti
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                        <a href="/tentang-kami" class="inline-flex items-center rounded-md border border-white/30 bg-white/10 px-5 py-3 text-sm font-semibold text-white backdrop-blur-sm transition-colors hover:bg-white/20">
                            Tentang Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 z-10 -translate-x-1/2 animate-bounce">
            <div class="flex h-8 w-5 items-start justify-center rounded-full border-2 border-white/40 pt-1.5">
                <div class="h-1.5 w-1 rounded-full bg-white/60"></div>
            </div>
        </div>
    </section>

    {{-- Property Preference Form Section --}}
    <section class="relative bg-white py-16 sm:py-24" id="search">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 right-0 h-80 w-80 rounded-full bg-emerald-50 opacity-50 blur-3xl"></div>
            <div class="absolute -bottom-40 left-0 h-80 w-80 rounded-full bg-cyan-50 opacity-50 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-neutral-800 sm:text-4xl">Apa yang Anda Cari?</h2>
                <p class="mt-3 text-lg text-neutral-500">Beritahu kami preferensi Anda dan kami akan mencarikan properti terbaik untuk Anda.</p>
            </div>

            <div class="mx-auto mt-12 max-w-4xl">
                {{-- Listing type toggle --}}
                <div class="mb-8 flex justify-center">
                    <div class="inline-flex rounded-xl bg-neutral-100 p-1">
                        <button data-listing="dijual" class="listing-toggle rounded-lg px-6 py-2.5 text-sm font-semibold transition-all bg-white text-neutral-800 shadow-sm">Beli Properti</button>
                        <button data-listing="disewakan" class="listing-toggle rounded-lg px-6 py-2.5 text-sm font-semibold transition-all text-neutral-500 hover:text-neutral-700">Sewa Properti</button>
                    </div>
                </div>

                {{-- Property type selection --}}
                <div class="mb-8">
                    <label class="mb-3 block text-center text-sm font-medium text-neutral-700">Pilih Tipe Properti <span class="text-neutral-400">(bisa lebih dari satu)</span></label>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                        @php
                            $propertyTypes = [
                                ['value' => 'rumah', 'label' => 'Rumah', 'icon' => '<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>'],
                                ['value' => 'apartemen', 'label' => 'Apartemen', 'icon' => '<rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/>'],
                                ['value' => 'tanah', 'label' => 'Tanah', 'icon' => '<line x1="3" x2="3" y1="22" y2="2"/><line x1="21" x2="21" y1="22" y2="2"/><path d="M12 17V2"/><path d="m3 7 4 4 4-4 4 4 4-4"/><path d="m3 12 4 4 4-4 4 4 4-4"/>'],
                                ['value' => 'ruko', 'label' => 'Ruko', 'icon' => '<path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/><path d="M22 7v3a2 2 0 0 1-2 2a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12a2 2 0 0 1-2-2V7"/>'],
                                ['value' => 'gudang', 'label' => 'Gudang', 'icon' => '<path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z"/><path d="M6 18h12"/><path d="M6 14h12"/><rect width="12" height="12" x="6" y="10"/>'],
                                ['value' => 'kantor', 'label' => 'Kantor', 'icon' => '<path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/>'],
                            ];
                        @endphp

                        @foreach($propertyTypes as $type)
                            <button
                                data-type="{{ $type['value'] }}"
                                class="property-type-btn group relative flex flex-col items-center gap-2 rounded-xl border-2 border-neutral-200 bg-white p-4 transition-all hover:border-neutral-300 hover:shadow-md"
                            >
                                <div class="type-icon flex h-11 w-11 items-center justify-center rounded-lg bg-neutral-100 text-neutral-500 transition-colors group-hover:bg-neutral-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $type['icon'] !!}</svg>
                                </div>
                                <span class="type-label text-sm font-medium text-neutral-700">{{ $type['label'] }}</span>
                                <div class="check-mark absolute -right-1 -top-1 hidden h-5 w-5 items-center justify-center rounded-full bg-emerald-500 text-white">
                                    <svg class="h-3 w-3" viewBox="0 0 12 12" fill="none"><path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Budget and Location --}}
                <div class="mb-8 grid gap-4 sm:grid-cols-3">
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-neutral-700">Budget Minimum</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-sm text-neutral-400">Rp</span>
                            <input id="budget-min" type="text" placeholder="500.000.000" class="w-full rounded-md border border-neutral-300 bg-white py-2 pl-9 pr-3 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                        </div>
                    </div>
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-neutral-700">Budget Maksimum</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-sm text-neutral-400">Rp</span>
                            <input id="budget-max" type="text" placeholder="2.000.000.000" class="w-full rounded-md border border-neutral-300 bg-white py-2 pl-9 pr-3 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                        </div>
                    </div>
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-neutral-700">Lokasi Preferensi</label>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            <input id="location" type="text" placeholder="Jakarta Selatan" class="w-full rounded-md border border-neutral-300 bg-white py-2 pl-9 pr-3 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                        </div>
                    </div>
                </div>

                {{-- Search button --}}
                <div class="text-center">
                    <button id="search-btn" class="inline-flex items-center rounded-md bg-emerald-600 px-10 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-emerald-700">
                        Cari Properti
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><path d="m9 18 6-6-6-6"/></svg>
                    </button>
                    <p class="mt-3 text-sm text-neutral-400">Kami hanya menampilkan properti yang sesuai dengan kebutuhan Anda</p>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section class="bg-neutral-50 py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-neutral-800 sm:text-4xl">Bagaimana Cara Kerjanya?</h2>
                <p class="mt-3 text-lg text-neutral-500">Empat langkah mudah menuju properti impian Anda</p>
            </div>

            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $steps = [
                        ['number' => '01', 'title' => 'Tentukan Preferensi', 'description' => 'Beritahu kami jenis properti impian Anda — tipe, lokasi, dan anggaran yang sesuai.'],
                        ['number' => '02', 'title' => 'Temukan Properti', 'description' => 'Tim kami menyajikan pilihan properti terverifikasi yang sesuai dengan kebutuhan Anda.'],
                        ['number' => '03', 'title' => 'Viewing & Negosiasi', 'description' => 'Jadwalkan kunjungan properti dan kami bantu proses negosiasi terbaik.'],
                        ['number' => '04', 'title' => 'Transaksi Aman', 'description' => 'Proses transaksi end-to-end dengan notaris terpercaya hingga serah terima sertifikat.'],
                    ];
                @endphp

                @foreach($steps as $step)
                    <div class="relative">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-600 text-lg font-bold text-white shadow-lg shadow-emerald-600/20">
                                {{ $step['number'] }}
                            </div>
                            <h3 class="mb-2 text-lg font-semibold text-neutral-800">{{ $step['title'] }}</h3>
                            <p class="text-sm leading-relaxed text-neutral-500">{{ $step['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Trust & Showcase Section --}}
    <section class="relative overflow-hidden bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                {{-- Image collage --}}
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="overflow-hidden rounded-2xl shadow-xl">
                                <img src="/images/header-1.jpg" alt="Properti premium" class="h-48 w-full object-cover transition-transform duration-500 hover:scale-105 sm:h-64" />
                            </div>
                            <div class="overflow-hidden rounded-2xl shadow-xl">
                                <img src="/images/header-3.jpg" alt="Interior modern" class="h-32 w-full object-cover transition-transform duration-500 hover:scale-105 sm:h-40" />
                            </div>
                        </div>
                        <div class="pt-8">
                            <div class="overflow-hidden rounded-2xl shadow-xl">
                                <img src="/images/header-2.jpg" alt="Lingkungan asri" class="h-56 w-full object-cover transition-transform duration-500 hover:scale-105 sm:h-72" />
                            </div>
                        </div>
                    </div>
                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 left-4 rounded-xl bg-white p-4 shadow-xl sm:left-8">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.77 4 4 0 0 1 0 6.76 4 4 0 0 1-4.78 4.77 4 4 0 0 1-6.74 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-neutral-800">100% Terverifikasi</p>
                                <p class="text-xs text-neutral-500">Semua properti kami verifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-neutral-800 sm:text-4xl">
                        Mengapa Memilih <span class="text-emerald-600">PropertiKu</span>?
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-neutral-500">
                        Kami bukan sekadar platform listing. Kami adalah fasilitator yang mendampingi Anda dari awal hingga akhir proses transaksi properti.
                    </p>

                    <div class="mt-8 space-y-6">
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Transaksi Aman & Transparan</h3>
                                <p class="mt-1 text-sm text-neutral-500">Setiap tahap transaksi dapat dipantau secara real-time dengan dokumentasi lengkap.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-cyan-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-600"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 0 3 3l1.5-1.5"/><path d="m18 6 .3-.3a2.4 2.4 0 0 0-3.4-3.4L6 11.1a8 8 0 0 0-2 3.2l-.9 2.6a1 1 0 0 0 1.2 1.3l2.5-.8a8 8 0 0 0 3.2-2l6-6.1"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Notaris Partner Terpercaya</h3>
                                <p class="mt-1 text-sm text-neutral-500">Bermitra dengan notaris berpengalaman untuk keamanan legalitas transaksi Anda.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-600"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m9 15 2 2 4-4"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">End-to-End Fasilitasi</h3>
                                <p class="mt-1 text-sm text-neutral-500">Dari pencarian, negosiasi, AJB, hingga balik nama sertifikat — semua kami dampingi.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-violet-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-violet-600"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Properti Terverifikasi</h3>
                                <p class="mt-1 text-sm text-neutral-500">Seluruh listing melalui proses verifikasi ketat untuk memastikan keaslian data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section id="stats-section" class="bg-emerald-700 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 lg:grid-cols-4">
                @php
                    $stats = [
                        ['label' => 'Properti Terdaftar', 'value' => 500, 'suffix' => '+'],
                        ['label' => 'Transaksi Berhasil', 'value' => 120, 'suffix' => '+'],
                        ['label' => 'Klien Puas', 'value' => 350, 'suffix' => '+'],
                        ['label' => 'Notaris Partner', 'value' => 15, 'suffix' => '+'],
                    ];
                @endphp

                @foreach($stats as $stat)
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white sm:text-4xl">
                            <span class="stat-value" data-target="{{ $stat['value'] }}">0</span>{{ $stat['suffix'] }}
                        </div>
                        <div class="mt-1 text-sm text-emerald-200">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="relative overflow-hidden bg-emerald-600 py-16 sm:py-20">
        <div class="absolute inset-0">
            <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-emerald-500 opacity-40 blur-3xl"></div>
            <div class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full bg-cyan-500 opacity-30 blur-3xl"></div>
        </div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Siap Menemukan Properti Impian?</h2>
                <p class="mt-4 text-lg text-emerald-100">
                    Daftar sekarang dan biarkan kami bantu Anda menemukan properti yang tepat dengan proses yang aman dan transparan.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="/register" class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-emerald-700 shadow-sm transition-colors hover:bg-emerald-50">
                        Daftar Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="/kontak" class="inline-flex items-center rounded-lg border border-white/30 px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white/10">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // --- Video Hero ---
    const videos = ['/videos/video-1.mp4', '/videos/video-2.mp4', '/videos/video-3.mp4'];
    let currentIndex = 0;
    const video = document.getElementById('hero-video');
    const toggleBtn = document.getElementById('video-toggle');
    const iconPause = document.getElementById('icon-pause');
    const iconPlay = document.getElementById('icon-play');

    if (video) {
        video.addEventListener('ended', function () {
            currentIndex = (currentIndex + 1) % videos.length;
            video.src = videos[currentIndex];
            video.play();
        });
    }

    if (toggleBtn && video) {
        toggleBtn.addEventListener('click', function () {
            if (video.paused) {
                video.play();
                iconPause.classList.remove('hidden');
                iconPlay.classList.add('hidden');
            } else {
                video.pause();
                iconPause.classList.add('hidden');
                iconPlay.classList.remove('hidden');
            }
        });
    }

    // --- Smooth scroll ---
    const scrollLink = document.getElementById('scroll-to-search');
    if (scrollLink) {
        scrollLink.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('search').scrollIntoView({ behavior: 'smooth' });
        });
    }

    // --- Listing type toggle ---
    let selectedListing = 'dijual';
    document.querySelectorAll('.listing-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
            selectedListing = this.dataset.listing;
            document.querySelectorAll('.listing-toggle').forEach(function (b) {
                if (b.dataset.listing === selectedListing) {
                    b.className = 'listing-toggle rounded-lg px-6 py-2.5 text-sm font-semibold transition-all bg-white text-neutral-800 shadow-sm';
                } else {
                    b.className = 'listing-toggle rounded-lg px-6 py-2.5 text-sm font-semibold transition-all text-neutral-500 hover:text-neutral-700';
                }
            });
        });
    });

    // --- Property type selection ---
    const selectedTypes = new Set();
    document.querySelectorAll('.property-type-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const type = this.dataset.type;
            if (selectedTypes.has(type)) {
                selectedTypes.delete(type);
                this.classList.remove('border-emerald-500', 'bg-emerald-50', 'shadow-sm');
                this.classList.add('border-neutral-200', 'bg-white');
                this.querySelector('.type-icon').classList.remove('bg-emerald-500', 'text-white');
                this.querySelector('.type-icon').classList.add('bg-neutral-100', 'text-neutral-500');
                this.querySelector('.type-label').classList.remove('text-emerald-700');
                this.querySelector('.type-label').classList.add('text-neutral-700');
                this.querySelector('.check-mark').classList.add('hidden');
                this.querySelector('.check-mark').classList.remove('flex');
            } else {
                selectedTypes.add(type);
                this.classList.add('border-emerald-500', 'bg-emerald-50', 'shadow-sm');
                this.classList.remove('border-neutral-200', 'bg-white');
                this.querySelector('.type-icon').classList.add('bg-emerald-500', 'text-white');
                this.querySelector('.type-icon').classList.remove('bg-neutral-100', 'text-neutral-500');
                this.querySelector('.type-label').classList.add('text-emerald-700');
                this.querySelector('.type-label').classList.remove('text-neutral-700');
                this.querySelector('.check-mark').classList.remove('hidden');
                this.querySelector('.check-mark').classList.add('flex');
            }
        });
    });

    // --- Budget formatter ---
    function formatNumber(value) {
        const num = parseInt(value.replace(/\D/g, ''));
        if (isNaN(num)) return '';
        return num.toLocaleString('id-ID');
    }

    const budgetMin = document.getElementById('budget-min');
    const budgetMax = document.getElementById('budget-max');

    [budgetMin, budgetMax].forEach(function (input) {
        if (!input) return;
        input.addEventListener('input', function () {
            const raw = this.value.replace(/\D/g, '');
            this.dataset.raw = raw;
            this.value = raw ? formatNumber(raw) : '';
        });
    });

    // --- Search button ---
    const searchBtn = document.getElementById('search-btn');
    if (searchBtn) {
        searchBtn.addEventListener('click', function () {
            const params = new URLSearchParams();
            if (selectedTypes.size) params.set('property_type', Array.from(selectedTypes).join(','));
            if (selectedListing) params.set('listing_type', selectedListing);
            const minRaw = budgetMin ? (budgetMin.dataset.raw || '') : '';
            const maxRaw = budgetMax ? (budgetMax.dataset.raw || '') : '';
            if (minRaw) params.set('min_price', minRaw);
            if (maxRaw) params.set('max_price', maxRaw);
            const loc = document.getElementById('location');
            if (loc && loc.value) params.set('city', loc.value);
            window.location.href = '/properti?' + params.toString();
        });
    }

    // --- Animated counters ---
    const statsSection = document.getElementById('stats-section');
    let statsAnimated = false;

    function animateCounters() {
        document.querySelectorAll('.stat-value').forEach(function (el) {
            const target = parseInt(el.dataset.target);
            const duration = 2000;
            const steps = 60;
            const increment = target / steps;
            let current = 0;
            const interval = setInterval(function () {
                current += increment;
                if (current >= target) {
                    el.textContent = target;
                    clearInterval(interval);
                } else {
                    el.textContent = Math.floor(current);
                }
            }, duration / steps);
        });
    }

    if (statsSection) {
        const observer = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting && !statsAnimated) {
                statsAnimated = true;
                animateCounters();
            }
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }
});
</script>
@endpush
