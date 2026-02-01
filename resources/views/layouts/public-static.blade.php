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
            <meta property="og:site_name" content="{{ config('app.name', 'PropertiKu') }}">
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
            <title>{{ config('app.name', 'PropertiKu') }}</title>
        @endif

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css'])

        <style>
            :root, .dark {
                --background: hsl(0 0% 100%) !important;
                --foreground: hsl(215 25% 27%) !important;
                --primary: hsl(160 84% 39%) !important;
                --primary-foreground: hsl(0 0% 100%) !important;
                --border: hsl(152 20% 90%) !important;
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
        <header class="fixed top-0 left-0 right-0 z-50 border-b border-neutral-200/60 bg-white/80 backdrop-blur-lg supports-[backdrop-filter]:bg-white/70">
            <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="/" class="flex items-center gap-2.5">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-neutral-800">PropertiKu</span>
                </a>

                <nav class="hidden items-center gap-1 md:flex">
                    <a href="/properti" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-600 transition-colors hover:bg-neutral-100 hover:text-emerald-700">Properti</a>
                    <a href="/tentang-kami" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-600 transition-colors hover:bg-neutral-100 hover:text-emerald-700">Tentang Kami</a>
                    <a href="/layanan" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-600 transition-colors hover:bg-neutral-100 hover:text-emerald-700">Layanan</a>
                    <a href="/kontak" class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-600 transition-colors hover:bg-neutral-100 hover:text-emerald-700">Kontak</a>
                </nav>

                <div class="hidden items-center gap-2 md:flex">
                    @auth
                        <a href="/dashboard" class="inline-flex items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-emerald-700">Dashboard</a>
                    @else
                        <a href="/login" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-100">Masuk</a>
                        <a href="/register" class="inline-flex items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-emerald-700">Daftar</a>
                    @endauth
                </div>

                {{-- Mobile menu button --}}
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center rounded-lg p-2 text-neutral-600 hover:bg-neutral-100 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                </button>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden border-t border-neutral-200 bg-white px-4 pb-4 pt-2 md:hidden">
                <nav class="flex flex-col gap-1">
                    <a href="/properti" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-600 hover:bg-neutral-100">Properti</a>
                    <a href="/tentang-kami" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-600 hover:bg-neutral-100">Tentang Kami</a>
                    <a href="/layanan" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-600 hover:bg-neutral-100">Layanan</a>
                    <a href="/kontak" class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-600 hover:bg-neutral-100">Kontak</a>
                </nav>
                <div class="mt-3 flex flex-col gap-2 border-t border-neutral-200 pt-3">
                    @auth
                        <a href="/dashboard" class="inline-flex w-full items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-emerald-700">Dashboard</a>
                    @else
                        <a href="/login" class="inline-flex w-full items-center justify-center rounded-md border border-neutral-300 px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-100">Masuk</a>
                        <a href="/register" class="inline-flex w-full items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-emerald-700">Daftar</a>
                    @endauth
                </div>
            </div>
        </header>

        {{-- Main content --}}
        <main class="flex-1 pt-16">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="border-t border-neutral-200 bg-neutral-50">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
                <div class="grid gap-8 md:grid-cols-4">
                    <div class="md:col-span-1">
                        <a href="/" class="flex items-center gap-2.5">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
                            </div>
                            <span class="text-lg font-bold text-neutral-800">PropertiKu</span>
                        </a>
                        <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                            Platform fasilitator properti terpercaya di Jakarta. Dari pencarian hingga serah terima sertifikat.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-neutral-800">Navigasi</h4>
                        <ul class="mt-3 space-y-2">
                            <li><a href="/properti" class="text-sm text-neutral-500 hover:text-emerald-700">Properti</a></li>
                            <li><a href="/tentang-kami" class="text-sm text-neutral-500 hover:text-emerald-700">Tentang Kami</a></li>
                            <li><a href="/layanan" class="text-sm text-neutral-500 hover:text-emerald-700">Layanan</a></li>
                            <li><a href="/kontak" class="text-sm text-neutral-500 hover:text-emerald-700">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-neutral-800">Layanan</h4>
                        <ul class="mt-3 space-y-2">
                            <li><span class="text-sm text-neutral-500">Jual Beli Properti</span></li>
                            <li><span class="text-sm text-neutral-500">Sewa Properti</span></li>
                            <li><span class="text-sm text-neutral-500">Konsultasi Hukum</span></li>
                            <li><span class="text-sm text-neutral-500">Notaris Partner</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-neutral-800">Kontak</h4>
                        <ul class="mt-3 space-y-2">
                            <li><span class="text-sm text-neutral-500">Jakarta, Indonesia</span></li>
                            <li><span class="text-sm text-neutral-500">info@propertiku.id</span></li>
                            <li><span class="text-sm text-neutral-500">+62 21 1234 5678</span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 border-t border-neutral-200 pt-8">
                    <p class="text-center text-sm text-neutral-500">
                        &copy; {{ date('Y') }} PropertiKu. Hak cipta dilindungi.
                    </p>
                </div>
            </div>
        </footer>

        @stack('scripts')
    </body>
</html>
