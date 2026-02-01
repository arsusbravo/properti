@extends('layouts.public-static')

@section('content')
    {{-- Hero --}}
    <section class="bg-gradient-to-br from-emerald-600 to-teal-700 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h1>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-emerald-100">
                Ada pertanyaan tentang properti atau layanan kami? Tim kami siap membantu Anda.
            </p>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-3">
                {{-- Contact Form --}}
                <div class="lg:col-span-2">
                    <div class="rounded-xl border border-neutral-200 bg-white shadow-sm">
                        <div class="border-b border-neutral-200 px-6 py-4">
                            <h2 class="text-lg font-semibold text-neutral-800">Kirim Pesan</h2>
                        </div>
                        <div class="p-6">
                            @if(session('success'))
                                <div class="mb-4 rounded-md bg-emerald-50 p-4 text-sm text-emerald-700">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                                @csrf
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label for="name" class="text-sm font-medium text-neutral-700">Nama Lengkap</label>
                                        <input id="name" name="name" value="{{ old('name') }}" placeholder="Nama Anda" class="mt-1 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                                        @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <label for="email" class="text-sm font-medium text-neutral-700">Email</label>
                                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@contoh.com" class="mt-1 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                                        @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label for="phone" class="text-sm font-medium text-neutral-700">No. Telepon</label>
                                        <input id="phone" name="phone" value="{{ old('phone') }}" placeholder="08xx-xxxx-xxxx" class="mt-1 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                                        @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <label for="subject" class="text-sm font-medium text-neutral-700">Subjek</label>
                                        <input id="subject" name="subject" value="{{ old('subject') }}" placeholder="Perihal pesan Anda" class="mt-1 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm shadow-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" />
                                        @error('subject') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="message" class="text-sm font-medium text-neutral-700">Pesan</label>
                                    <textarea id="message" name="message" rows="5" class="mt-1 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm placeholder:text-neutral-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" placeholder="Tuliskan pesan Anda di sini...">{{ old('message') }}</textarea>
                                    @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <button type="submit" class="inline-flex items-center rounded-md bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-emerald-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Contact Info --}}
                <div class="space-y-4">
                    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Alamat Kantor</h3>
                                <p class="mt-1 text-sm text-neutral-500">
                                    Jl. Sudirman No. 123<br>
                                    Jakarta Selatan, 12190<br>
                                    Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Telepon</h3>
                                <p class="mt-1 text-sm text-neutral-500">(021) 1234-5678</p>
                                <p class="text-sm text-neutral-500">WhatsApp: 0812-3456-7890</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Email</h3>
                                <p class="mt-1 text-sm text-neutral-500">info@propertiku.id</p>
                                <p class="text-sm text-neutral-500">support@propertiku.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-neutral-800">Jam Operasional</h3>
                                <p class="mt-1 text-sm text-neutral-500">Senin - Jumat: 09:00 - 17:00</p>
                                <p class="text-sm text-neutral-500">Sabtu: 09:00 - 13:00</p>
                                <p class="text-sm text-neutral-500">Minggu & Hari Libur: Tutup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
