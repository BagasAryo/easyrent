<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Sewa Saya')] #[Layout('layouts.user')] class extends Component {
    // User bookings component logic
}; ?>

<div class="space-y-6">
    <div>
        <flux:heading size="xl" level="1">Riwayat & Daftar Sewa</flux:heading>
        <flux:subheading>Daftar semua transaksi penyewaan mobil Anda di EasyRent.</flux:subheading>
    </div>

    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
        <!-- Table Placeholder -->
        <div class="text-sm text-zinc-400 py-16 text-center border border-dashed border-zinc-700 rounded-lg">
            Tabel Riwayat Penyewaan Saya (Kode Transaksi, Mobil, Tanggal Sewa, Total Bayar, Status, Action Invoice)
        </div>
    </div>
</div>
