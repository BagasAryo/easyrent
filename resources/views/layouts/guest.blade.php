<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-zinc-950 text-zinc-100 flex flex-col justify-between">
        <!-- Top Navbar -->
        <header class="sticky top-0 z-50 border-b border-zinc-800 bg-zinc-950/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <x-app-logo href="{{ route('home') }}" />
                </div>

                <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                    <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
                    <a href="#katalog" class="hover:text-white transition">Katalog Motor</a>
                    <a href="#fitur" class="hover:text-white transition">Keunggulan</a>
                </nav>

                <div class="flex items-center gap-3">
                    @auth
                        @if (auth()->user()->role === 'admin')
                            <flux:button variant="primary" href="{{ route('admin.dashboard') }}" icon="layout-grid">
                                Dashboard Admin
                            </flux:button>
                        @else
                            <flux:button variant="primary" href="{{ route('user.dashboard') }}" icon="home">
                                Dashboard Saya
                            </flux:button>
                        @endif
                    @else
                        <flux:button variant="ghost" href="{{ route('login') }}" wire:navigate>
                            Masuk
                        </flux:button>
                        <flux:button variant="primary" href="{{ route('register') }}" wire:navigate>
                            Daftar Sekarang
                        </flux:button>
                    @endauth
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="border-t border-zinc-800 bg-zinc-900/50 py-10 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-zinc-400">
                <div class="flex items-center gap-3">
                    <x-app-logo />
                    <span>&copy; {{ date('Y') }} EasyRent. Layanan Rental Motor Terpercaya.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition">Bantuan</a>
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
