<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if(isset($seo))
            <title>{{ $seo['title'] }}</title>
            <meta name="description" content="{{ $seo['description'] }}">
            @if(!empty($seo['keywords']))
                <meta name="keywords" content="{{ $seo['keywords'] }}">
            @endif

            {{-- Open Graph --}}
            <meta property="og:title" content="{{ $seo['title'] }}">
            <meta property="og:description" content="{{ $seo['description'] }}">
            <meta property="og:type" content="{{ $seo['type'] ?? 'website' }}">
            <meta property="og:url" content="{{ url()->current() }}">
            <meta property="og:locale" content="id_ID">
            <meta property="og:site_name" content="{{ config('app.name', 'Toto Prime Realty') }}">
            @if(!empty($seo['image']))
                <meta property="og:image" content="{{ $seo['image'] }}">
            @endif

            {{-- Twitter Card --}}
            <meta name="twitter:card" content="{{ !empty($seo['image']) ? 'summary_large_image' : 'summary' }}">
            <meta name="twitter:title" content="{{ $seo['title'] }}">
            <meta name="twitter:description" content="{{ $seo['description'] }}">
            @if(!empty($seo['image']))
                <meta name="twitter:image" content="{{ $seo['image'] }}">
            @endif

            {{-- Canonical URL --}}
            <link rel="canonical" href="{{ url()->current() }}">

            {{-- JSON-LD Structured Data --}}
            @if(!empty($seo['jsonLd']))
                <script type="application/ld+json">{!! json_encode($seo['jsonLd'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
            @endif
        @else
            <title>{{ config('app.name', 'Toto Prime Realty') }}</title>
        @endif

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css'])

        <style>
            :root, .dark {
                --background: hsl(0 0% 100%) !important;
                --foreground: hsl(215 25% 27%) !important;
                --primary: hsl(218 33% 24%) !important;
                --primary-foreground: hsl(0 0% 100%) !important;
                --border: hsl(38 35% 85%) !important;
                --radius: 0.5rem;
            }
            html {
                background-color: hsl(0 0% 100%) !important;
                color-scheme: light !important;
            }
        </style>
    </head>
    <body class="min-h-screen flex flex-col font-sans antialiased">
        {{-- Header --}}
        <header class="fixed top-0 left-0 right-0 z-50 bg-[#293953]">
            <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="/" class="flex items-center gap-2.5">
                    <img src="/images/toto-logo.png" alt="Toto Prime Realty" class="h-10 w-auto" />
                    <span class="text-2xl font-bold tracking-tight font-logo text-[#F8E6BB]">TOTO PRIME REALTY</span>
                </a>

                <nav class="hidden items-center gap-1 md:flex">
                    <a href="/" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]">Home</a>
                    <a href="/properti" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]">Properti</a>
                    <a href="/tentang-kami" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]">Tentang Kami</a>
                    <a href="/layanan" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]">Layanan</a>
                    <a href="/kontak" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]">Kontak</a>
                </nav>

                <div class="hidden items-center gap-2 md:flex">
                    @auth
                        <a href="/dashboard" class="inline-flex items-center justify-center rounded-md bg-[#c39b5d] px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-[#b08a4e]">Dashboard</a>
                    @else
                        <a href="/login" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-white">Masuk</a>
                    @endauth
                </div>

                {{-- Mobile menu button --}}
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center rounded-lg p-2 text-neutral-300 hover:bg-white/10 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                </button>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden border-t border-white/10 bg-[#293953] px-4 pb-4 pt-2 md:hidden">
                <nav class="flex flex-col gap-1">
                    <a href="/properti" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]">Properti</a>
                    <a href="/tentang-kami" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]">Tentang Kami</a>
                    <a href="/layanan" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]">Layanan</a>
                    <a href="/kontak" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]">Kontak</a>
                </nav>
                <div class="mt-3 flex flex-col gap-2 border-t border-white/10 pt-3">
                    @auth
                        <a href="/dashboard" class="inline-flex w-full items-center justify-center rounded-md bg-[#c39b5d] px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-[#b08a4e]">Dashboard</a>
                    @else
                        <a href="/login" class="inline-flex w-full items-center justify-center rounded-md border border-white/20 px-4 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-white">Masuk</a>
                    @endauth
                </div>
            </div>
        </header>

        {{-- Main content --}}
        <main class="flex-1 pt-16">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="border-t border-neutral-200 bg-[#293953]">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
                <div class="grid gap-8 md:grid-cols-4">
                    <div class="md:col-span-1">
                        <a href="/" class="block text-center">
                            <div>
                                <img src="/images/toto-logo.png" alt="Toto Prime Realty" class="w-full h-auto" />
                                <span class="block text-2xl font-bold font-logo text-[#F8E6BB]">TOTO PRIME REALTY</span>
                                <img src="/images/logo-separator.png" alt="" class="my-0.5 h-0.75 w-full opacity-70" />
                                <span class="block font-medium tracking-[0.15em] text-[#c39b5d]">INVEST IN YOUR FUTURE</span>
                            </div>
                        </a>
                        <p class="mt-3 text-sm leading-relaxed text-neutral-400">
                            Fasilitator properti terpercaya di Jakarta. Invest in your future bersama Toto Prime Realty.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-[#c39b5d]">Navigasi</h4>
                        <ul class="mt-3 space-y-2">
                            <li><a href="/properti" class="text-sm text-neutral-400 hover:text-[#c39b5d]">Properti</a></li>
                            <li><a href="/tentang-kami" class="text-sm text-neutral-400 hover:text-[#c39b5d]">Tentang Kami</a></li>
                            <li><a href="/layanan" class="text-sm text-neutral-400 hover:text-[#c39b5d]">Layanan</a></li>
                            <li><a href="/kontak" class="text-sm text-neutral-400 hover:text-[#c39b5d]">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-[#c39b5d]">Layanan</h4>
                        <ul class="mt-3 space-y-2">
                            <li><span class="text-sm text-neutral-400">Jual Beli Properti</span></li>
                            <li><span class="text-sm text-neutral-400">Sewa Properti</span></li>
                            <li><span class="text-sm text-neutral-400">Konsultasi Hukum</span></li>
                            <li><span class="text-sm text-neutral-400">Notaris Partner</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-[#c39b5d]">Kontak</h4>
                        <ul class="mt-3 space-y-2">
                            <li><span class="text-sm text-neutral-400">Jakarta, Indonesia</span></li>
                            <li><span class="text-sm text-neutral-400">totoprimerealty@gmail.com</span></li>
                            <li><span class="text-sm text-neutral-400">0811 8806 2368</span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 border-t border-white/10 pt-8">
                    <p class="text-center text-sm text-neutral-400">
                        &copy; {{ date('Y') }} Toto Prime Realty. Hak cipta dilindungi.
                    </p>
                </div>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>
