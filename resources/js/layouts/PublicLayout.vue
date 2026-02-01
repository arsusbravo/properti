<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Menu, X } from 'lucide-vue-next';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);

const navLinks = [
    { href: '/properti', label: 'Properti' },
    { href: '/tentang-kami', label: 'Tentang Kami', external: true },
    { href: '/layanan', label: 'Layanan', external: true },
    { href: '/kontak', label: 'Kontak', external: true },
];
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="fixed top-0 left-0 right-0 z-50 border-b border-white/10 bg-[#293953]/95 backdrop-blur-lg supports-backdrop-filter:bg-[#293953]/90">
            <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="/" class="flex items-center gap-2.5">
                    <img src="/images/toto-logo.png" alt="Toto Prime Realty" class="h-10 w-auto" />
                    <span class="text-lg font-bold tracking-tight text-white">TOTO PRIME REALTY</span>
                </a>

                <nav class="hidden items-center gap-1 md:flex">
                    <template v-for="link in navLinks" :key="link.href">
                        <a
                            v-if="link.external"
                            :href="link.href"
                            class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]"
                        >
                            {{ link.label }}
                        </a>
                        <Link
                            v-else
                            :href="link.href"
                            class="rounded-lg px-3.5 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-[#c39b5d]"
                        >
                            {{ link.label }}
                        </Link>
                    </template>
                </nav>

                <div class="hidden items-center gap-2 md:flex">
                    <template v-if="$page.props.auth?.user">
                        <a href="/dashboard" class="inline-flex items-center justify-center rounded-md bg-[#c39b5d] px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-[#b08a4e]">Dashboard</a>
                    </template>
                    <template v-else>
                        <a href="/login" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-white">Masuk</a>
                    </template>
                </div>

                <!-- Mobile menu button -->
                <button
                    class="inline-flex items-center justify-center rounded-lg p-2 text-neutral-300 hover:bg-white/10 md:hidden"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <X v-if="mobileMenuOpen" class="h-5 w-5" />
                    <Menu v-else class="h-5 w-5" />
                </button>
            </div>

            <!-- Mobile menu -->
            <div v-if="mobileMenuOpen" class="border-t border-white/10 bg-[#293953] px-4 pb-4 pt-2 md:hidden">
                <nav class="flex flex-col gap-1">
                    <template v-for="link in navLinks" :key="link.href">
                        <a
                            v-if="link.external"
                            :href="link.href"
                            class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]"
                            @click="mobileMenuOpen = false"
                        >
                            {{ link.label }}
                        </a>
                        <Link
                            v-else
                            :href="link.href"
                            class="rounded-lg px-3 py-2.5 text-sm font-medium text-neutral-300 hover:bg-white/10 hover:text-[#c39b5d]"
                            @click="mobileMenuOpen = false"
                        >
                            {{ link.label }}
                        </Link>
                    </template>
                </nav>
                <div class="mt-3 flex flex-col gap-2 border-t border-white/10 pt-3">
                    <template v-if="$page.props.auth?.user">
                        <a href="/dashboard" class="inline-flex w-full items-center justify-center rounded-md bg-[#c39b5d] px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-[#b08a4e]">Dashboard</a>
                    </template>
                    <template v-else>
                        <a href="/login" class="inline-flex w-full items-center justify-center rounded-md border border-white/20 px-4 py-2 text-sm font-medium text-neutral-300 transition-colors hover:bg-white/10 hover:text-white">Masuk</a>
                    </template>
                </div>
            </div>
        </header>

        <!-- Main content -->
        <main class="flex-1 pt-16">
            <slot />
        </main>

        <!-- Footer -->
        <footer class="border-t border-neutral-200 bg-[#293953]">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
                <div class="grid gap-8 md:grid-cols-4">
                    <div class="md:col-span-1">
                        <a href="/" class="flex items-center gap-2.5">
                            <img src="/images/toto-logo.png" alt="Toto Prime Realty" class="h-9 w-auto" />
                            <div>
                                <span class="block text-lg font-bold text-white">TOTO PRIME REALTY</span>
                                <img src="/images/logo-separator.png" alt="" class="my-0.5 h-[3px] w-full opacity-70" />
                                <span class="block text-[10px] font-medium tracking-[0.15em] text-[#c39b5d]">INVEST IN YOUR FUTURE</span>
                            </div>
                        </a>
                        <p class="mt-3 text-sm leading-relaxed text-neutral-400">
                            Fasilitator properti terpercaya di Jakarta. Invest in your future bersama Toto Prime Realty.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-[#c39b5d]">Navigasi</h4>
                        <ul class="mt-3 space-y-2">
                            <li v-for="link in navLinks" :key="link.href">
                                <a v-if="link.external" :href="link.href" class="text-sm text-neutral-400 hover:text-[#c39b5d]">
                                    {{ link.label }}
                                </a>
                                <Link v-else :href="link.href" class="text-sm text-neutral-400 hover:text-[#c39b5d]">
                                    {{ link.label }}
                                </Link>
                            </li>
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
                        &copy; {{ new Date().getFullYear() }} Toto Prime Realty. Hak cipta dilindungi.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>
