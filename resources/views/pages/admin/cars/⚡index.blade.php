<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Kelola Mobil')] #[Layout('layouts.admin')] class extends Component {
    // Admin car management logic
}; ?>

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl" level="1">Manajemen Mobil</flux:heading>
            <flux:subheading>Daftar armada mobil yang tersedia di armada EasyRent.</flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus">Tambah Mobil Baru</flux:button>
    </div>

    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
        <div class="flex items-center justify-between gap-4">
            <flux:input icon="magnifying-glass" placeholder="Cari nama mobil, plat nomor..." class="max-w-xs" />
            <flux:select placeholder="Filter Status" class="w-40">
                <option value="">Semua Status</option>
                <option value="available">Tersedia</option>
                <option value="rented">Disewa</option>
                <option value="maintenance">Perbaikan</option>
            </flux:select>
        </div>

        <!-- Table Placeholder -->
        <div class="text-sm text-zinc-400 py-16 text-center border border-dashed border-zinc-700 rounded-lg">
            Tabel Kelola Mobil (Merk, Model, Plat Nomor, Harga/Hari, Status, Aksi)
        </div>
    </div>
</div>
