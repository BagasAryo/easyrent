<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Kelola Booking')] #[Layout('layouts.admin')] class extends Component {
    // Admin booking management logic
}; ?>

<div class="space-y-6">
    <div>
        <flux:heading size="xl" level="1">Kelola Pesanan & Booking</flux:heading>
        <flux:subheading>Daftar semua transaksi penyewaan mobil pelanggan.</flux:subheading>
    </div>

    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
        <div class="flex items-center justify-between gap-4">
            <flux:input icon="magnifying-glass" placeholder="Cari kode booking, nama penyewa..." class="max-w-xs" />
            <flux:select placeholder="Status Transaksi" class="w-44">
                <option value="">Semua Status</option>
                <option value="pending">Menunggu Approve</option>
                <option value="active">Sedang Berjalan</option>
                <option value="completed">Selesai</option>
                <option value="cancelled">Dibatalkan</option>
            </flux:select>
        </div>

        <!-- Table Placeholder -->
        <div class="text-sm text-zinc-400 py-16 text-center border border-dashed border-zinc-700 rounded-lg">
            Tabel Kelola Transaksi Booking (Kode, Penyewa, Mobil, Tgl Sewa, Total, Status, Detail)
        </div>
    </div>
</div>
