<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">

        @if(isset($page['props']['seo']))
            @php $seo = $page['props']['seo']; @endphp
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
            <title inertia>{{ config('app.name', 'Laravel') }}</title>
            <meta property="og:locale" content="id_ID">
            <meta property="og:site_name" content="{{ config('app.name', 'Toto Prime Realty') }}">
        @endif

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        {{-- Force light mode: prevent dark class from ever being added --}}
        <script>
            (function() {
                var html = document.documentElement;
                html.classList.remove('dark');
                var obs = new MutationObserver(function() {
                    if (html.classList.contains('dark')) {
                        html.classList.remove('dark');
                    }
                });
                obs.observe(html, { attributes: true, attributeFilter: ['class'] });
            })();
        </script>

        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead

        {{-- Override theme variables: navy/gold light theme for public pages --}}
        <style>
            :root, .dark {
                --background: hsl(0 0% 100%) !important;
                --foreground: hsl(215 25% 27%) !important;
                --card: hsl(0 0% 100%) !important;
                --card-foreground: hsl(215 25% 27%) !important;
                --popover: hsl(0 0% 100%) !important;
                --popover-foreground: hsl(215 25% 27%) !important;
                --primary: hsl(218 33% 24%) !important;
                --primary-foreground: hsl(0 0% 100%) !important;
                --secondary: hsl(38 35% 94%) !important;
                --secondary-foreground: hsl(218 33% 24%) !important;
                --muted: hsl(38 20% 97%) !important;
                --muted-foreground: hsl(215 16% 47%) !important;
                --accent: hsl(38 35% 94%) !important;
                --accent-foreground: hsl(218 33% 24%) !important;
                --destructive: hsl(0 84.2% 60.2%) !important;
                --destructive-foreground: hsl(0 0% 98%) !important;
                --border: hsl(38 35% 85%) !important;
                --input: hsl(38 35% 85%) !important;
                --ring: hsl(37 40% 50%) !important;
                --radius: 0.5rem;
                --sidebar-background: hsl(0 0% 98%) !important;
                --sidebar-foreground: hsl(240 5.3% 26.1%) !important;
                --sidebar-primary: hsl(218 33% 24%) !important;
                --sidebar-primary-foreground: hsl(0 0% 98%) !important;
                --sidebar-accent: hsl(38 35% 94%) !important;
                --sidebar-accent-foreground: hsl(218 33% 24%) !important;
                --sidebar-border: hsl(38 35% 85%) !important;
                --sidebar-ring: hsl(37 40% 50%) !important;
                --chart-1: hsl(218 33% 24%) !important;
                --chart-2: hsl(37 40% 50%) !important;
                --chart-3: hsl(197 37% 24%) !important;
                --chart-4: hsl(43 74% 66%) !important;
                --chart-5: hsl(27 87% 67%) !important;
            }

            html {
                background-color: hsl(0 0% 100%) !important;
                color-scheme: light !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
