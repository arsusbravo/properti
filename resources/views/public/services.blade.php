@extends('layouts.public-static')

@section('content')
    {{-- Hero --}}
    <section class="bg-gradient-to-br from-emerald-600 to-teal-700 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Layanan Kami</h1>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-emerald-100">
                PropertiKu menyediakan layanan fasilitasi properti end-to-end, dari pencarian hingga serah terima sertifikat.
            </p>
        </div>
    </section>

    {{-- Alur Transaksi --}}
    <section class="py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl font-bold text-neutral-800">Alur Transaksi Properti</h2>
            <p class="mt-2 text-center text-neutral-500">Kami mendampingi Anda di setiap tahap transaksi</p>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $steps = [
                        ['stage' => 'Tahap 1', 'title' => 'Pencarian Properti', 'desc' => 'Cari properti sesuai kebutuhan Anda melalui listing terverifikasi kami, atau sampaikan kriteria Anda dan kami carikan yang terbaik.', 'icon' => '<circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>'],
                        ['stage' => 'Tahap 2', 'title' => 'Viewing & Survey', 'desc' => 'Kami atur jadwal kunjungan ke properti pilihan Anda. Tim kami akan mendampingi dan memberikan informasi detail lokasi.', 'icon' => '<path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/>'],
                        ['stage' => 'Tahap 3', 'title' => 'Negosiasi & Kesepakatan', 'desc' => 'Kami fasilitasi negosiasi harga dan syarat antara pembeli dan penjual hingga tercapai kesepakatan yang adil.', 'icon' => '<path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 0 3 3l1.5-1.5"/><path d="m18 6 .3-.3a2.4 2.4 0 0 0-3.4-3.4L6 11.1a8 8 0 0 0-2 3.2l-.9 2.6a1 1 0 0 0 1.2 1.3l2.5-.8a8 8 0 0 0 3.2-2l6-6.1"/>'],
                        ['stage' => 'Tahap 4', 'title' => 'Verifikasi Dokumen', 'desc' => 'Kami bantu kumpulkan dan verifikasi semua dokumen yang diperlukan: KTP, KK, NPWP, SHM, PBB, IMB, dan lainnya.', 'icon' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m9 15 2 2 4-4"/>'],
                        ['stage' => 'Tahap 5', 'title' => 'Proses Notaris & AJB', 'desc' => 'Kami koordinasikan dengan notaris rekanan untuk penyusunan PPJB, penandatanganan AJB, pembayaran pajak (BPHTB & PPh), dan balik nama.', 'icon' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/>'],
                        ['stage' => 'Tahap 6', 'title' => 'Serah Terima', 'desc' => 'Setelah semua proses selesai, kami pastikan serah terima kunci dan sertifikat berjalan lancar. Properti resmi menjadi milik Anda.', 'icon' => '<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>'],
                    ];
                @endphp

                @foreach($steps as $step)
                    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-emerald-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $step['icon'] !!}</svg>
                            </div>
                            <div>
                                <span class="text-xs font-medium text-emerald-600">{{ $step['stage'] }}</span>
                                <h3 class="font-semibold text-neutral-800">{{ $step['title'] }}</h3>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-neutral-500">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Layanan Tambahan --}}
    <section class="bg-emerald-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl font-bold text-neutral-800">Layanan untuk Penjual</h2>
            <p class="mt-2 text-center text-neutral-500">Kami juga membantu penjual dalam memasarkan properti mereka</p>
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <div class="rounded-xl bg-white p-6 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Listing Properti</h3>
                    <p class="mt-2 text-sm text-neutral-500">Daftarkan properti Anda secara gratis. Tim kami akan bantu review dan optimalkan listing Anda agar cepat terjual.</p>
                </div>
                <div class="rounded-xl bg-white p-6 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Manajemen Inquiry</h3>
                    <p class="mt-2 text-sm text-neutral-500">Kelola semua pertanyaan dan permintaan viewing dari calon pembeli dalam satu dashboard.</p>
                </div>
                <div class="rounded-xl bg-white p-6 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-600"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 0 3 3l1.5-1.5"/><path d="m18 6 .3-.3a2.4 2.4 0 0 0-3.4-3.4L6 11.1a8 8 0 0 0-2 3.2l-.9 2.6a1 1 0 0 0 1.2 1.3l2.5-.8a8 8 0 0 0 3.2-2l6-6.1"/></svg>
                    </div>
                    <h3 class="font-semibold text-neutral-800">Pendampingan Transaksi</h3>
                    <p class="mt-2 text-sm text-neutral-500">Kami dampingi seluruh proses transaksi hingga selesai, termasuk koordinasi dengan notaris dan pengurusan dokumen.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-emerald-700 py-16">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-white">Mulai Sekarang</h2>
            <p class="mt-3 text-emerald-100">Daftar gratis dan nikmati kemudahan transaksi properti bersama PropertiKu</p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="/register" class="inline-flex items-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-emerald-700 shadow-sm transition-colors hover:bg-emerald-50">
                    Daftar Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
                <a href="/kontak" class="inline-flex items-center rounded-lg border border-white/30 px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white/10">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
