<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Admin Dashboard')] #[Layout('layouts.admin')] class extends Component {
    // Admin dashboard component logic
}; ?>

<div class="space-y-6">
  <div>
    <flux:heading size="xl" level="1">Dashboard Admin</flux:heading>
    <flux:subheading>Ringkasan performa dan aktivitas sistem EasyRent.</flux:subheading>
  </div>

  <!-- Summary Stat Cards -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div
      class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
      <div class="flex items-center justify-between text-zinc-400">
        <span class="text-sm font-medium">Total Motor</span>
        <flux:icon icon="truck" class="size-5" />
      </div>
      <div class="mt-4">
        <span class="text-3xl font-bold text-zinc-900 dark:text-white">24</span>
        <p class="text-xs text-zinc-500 mt-1">18 Siap Disewa, 6 Sedang Dipakai</p>
      </div>
    </div>

    <div
      class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
      <div class="flex items-center justify-between text-zinc-400">
        <span class="text-sm font-medium">Booking Aktif</span>
        <flux:icon icon="clipboard-document-list" class="size-5" />
      </div>
      <div class="mt-4">
        <span class="text-3xl font-bold text-zinc-900 dark:text-white">12</span>
        <p class="text-xs text-amber-500 mt-1">3 Menunggu Konfirmasi</p>
      </div>
    </div>

    <div
      class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
      <div class="flex items-center justify-between text-zinc-400">
        <span class="text-sm font-medium">Total Pelanggan</span>
        <flux:icon icon="users" class="size-5" />
      </div>
      <div class="mt-4">
        <span class="text-3xl font-bold text-zinc-900 dark:text-white">158</span>
        <p class="text-xs text-emerald-500 mt-1">+12 bulan ini</p>
      </div>
    </div>

    <div
      class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 flex flex-col justify-between">
      <div class="flex items-center justify-between text-zinc-400">
        <span class="text-sm font-medium">Pendapatan Bulan Ini</span>
        <flux:icon icon="banknotes" class="size-5" />
      </div>
      <div class="mt-4">
        <span class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">Rp 48.500.000</span>
        <p class="text-xs text-emerald-500 mt-1">+15% dari bulan lalu</p>
      </div>
    </div>
  </div>

  <!-- Recent Activity Placeholder -->
  <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
    <flux:heading size="lg">Transaksi Terbaru</flux:heading>
    <div class="text-sm text-zinc-400 py-8 text-center border border-dashed border-zinc-700 rounded-lg">
      Placeholder Tabel Transaksi Terbaru (Admin View)
    </div>
  </div>
</div>
