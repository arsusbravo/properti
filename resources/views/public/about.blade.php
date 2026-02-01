@extends('layouts.public-static')

@section('content')
    {{-- Hero --}}
    <section class="bg-gradient-to-br from-emerald-600 to-teal-700 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Tentang PropertiKu</h1>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-emerald-100">
                Platform fasilitator properti terpercaya di Jakarta yang membantu Anda dari pencarian hingga serah terima sertifikat.
            </p>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-8">
                    <div class="mb-4 inline-flex items-center justify-center rounded-lg bg-emerald-600 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-neutral-800">Visi Kami</h2>
                    <p class="mt-3 leading-relaxed text-neutral-600">
                        Menjadi platform fasilitator properti nomor satu di Jakarta yang memberikan pengalaman transaksi properti yang transparan, aman, dan efisien bagi semua pihak.
                    </p>
                </div>
                <div class="rounded-xl border border-neutral-200 bg-white p-8 shadow-sm">
                    <div class="mb-4 inline-flex items-center justify-center rounded-lg bg-emerald-600 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 0 3 3l1.5-1.5"/><path d="m18 6 .3-.3a2.4 2.4 0 0 0-3.4-3.4L6 11.1a8 8 0 0 0-2 3.2l-.9 2.6a1 1 0 0 0 1.2 1.3l2.5-.8a8 8 0 0 0 3.2-2l6-6.1"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-neutral-800">Misi Kami</h2>
                    <ul class="mt-3 space-y-3 text-neutral-600">
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 shrink-0 text-emerald-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                            Menyediakan listing properti yang terverifikasi dan berkualitas
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 shrink-0 text-emerald-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                            Memfasilitasi transaksi end-to-end dari viewing hingga balik nama
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 shrink-0 text-emerald-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                            Bermitra dengan notaris terpercaya untuk keamanan hukum
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 shrink-0 text-emerald-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                            Memberikan transparansi penuh dalam setiap tahap transaksi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Kenapa PropertiKu --}}
    <section class="bg-neutral-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl font-bold text-neutral-800">Mengapa Memilih PropertiKu?</h2>
            <p class="mx-auto mt-2 max-w-xl text-center text-neutral-500">Keunggulan yang membedakan kami dari platform properti lainnya</p>
            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-xl bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Aman & Terpercaya</h3>
                    <p class="mt-2 text-sm text-neutral-500">Setiap properti diverifikasi dan transaksi dilindungi secara hukum</p>
                </div>
                <div class="rounded-xl bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 0 3 3l1.5-1.5"/><path d="m18 6 .3-.3a2.4 2.4 0 0 0-3.4-3.4L6 11.1a8 8 0 0 0-2 3.2l-.9 2.6a1 1 0 0 0 1.2 1.3l2.5-.8a8 8 0 0 0 3.2-2l6-6.1"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Fasilitasi Penuh</h3>
                    <p class="mt-2 text-sm text-neutral-500">Dari pencarian, negosiasi, hingga penandatanganan AJB dan balik nama</p>
                </div>
                <div class="rounded-xl bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Tim Profesional</h3>
                    <p class="mt-2 text-sm text-neutral-500">Didukung oleh tim berpengalaman di industri properti Jakarta</p>
                </div>
                <div class="rounded-xl bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Fokus Jakarta</h3>
                    <p class="mt-2 text-sm text-neutral-500">Pengetahuan mendalam tentang pasar properti Jakarta dan sekitarnya</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-emerald-700 py-16">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-white">Siap Memulai?</h2>
            <p class="mt-3 text-emerald-100">Bergabung dengan ribuan pengguna yang telah mempercayakan transaksi properti mereka kepada PropertiKu</p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="/register" class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-emerald-700 shadow-sm transition-colors hover:bg-emerald-50">
                    Daftar Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
                <a href="/properti" class="inline-flex items-center rounded-lg border border-white/30 px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white/10">
                    Lihat Properti
                </a>
            </div>
        </div>
    </section>
@endsection
