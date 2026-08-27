<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Dashboard Saya')] #[Layout('layouts.user')] class extends Component {
    // User dashboard component logic
}; ?>

<div class="space-y-6">
    <div>
        <flux:heading size="xl" level="1">Selamat Datang, {{ auth()->user()?->name ?? 'Pelanggan' }}!</flux:heading>
        <flux:subheading>Pantau penyewaan mobil Anda yang sedang aktif dan riwayat pemesanan.</flux:subheading>
    </div>

    <!-- User Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
            <div class="flex items-center justify-between text-zinc-400">
                <span class="text-sm font-medium">Sewa Aktif</span>
                <flux:icon icon="key" class="size-5" />
            </div>
            <div class="mt-4">
                <span class="text-3xl font-bold text-zinc-900 dark:text-white">1</span>
                <p class="text-xs text-emerald-500 mt-1">Toyota Innova Zenix (Kembali 29 Ags)</p>
            </div>
        </div>

        <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
            <div class="flex items-center justify-between text-zinc-400">
                <span class="text-sm font-medium">Total Pemesanan</span>
                <flux:icon icon="clipboard-document-check" class="size-5" />
            </div>
            <div class="mt-4">
                <span class="text-3xl font-bold text-zinc-900 dark:text-white">5</span>
                <p class="text-xs text-zinc-500 mt-1">4 Transaksi Selesai</p>
            </div>
        </div>

        <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
            <div class="flex items-center justify-between text-zinc-400">
                <span class="text-sm font-medium">Point Hadiah</span>
                <flux:icon icon="sparkles" class="size-5" />
            </div>
            <div class="mt-4">
                <span class="text-3xl font-bold text-amber-500">250 Pts</span>
                <p class="text-xs text-zinc-400 mt-1">Tukarkan dengan diskon sewa</p>
            </div>
        </div>
    </div>

    <!-- Active Rental Detail Placeholder -->
    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
        <div class="flex items-center justify-between">
            <flux:heading size="lg">Mobil yang Sedang Anda Sewa</flux:heading>
            <flux:button variant="ghost" size="sm" icon="magnifying-glass" href="{{ route('home') }}">Sewa Mobil Lain</flux:button>
        </div>
        
        <div class="text-sm text-zinc-400 py-10 text-center border border-dashed border-zinc-700 rounded-lg">
            Placeholder Kartu Detail Mobil Aktif (Info Pengambilan, Pengembalian, dan Kontak Support)
        </div>
    </div>
</div>
