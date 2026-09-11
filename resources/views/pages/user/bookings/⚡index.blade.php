<?php

use App\Models\Booking;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Riwayat Booking')] #[Layout('layouts.user')] class extends Component {
    public function with(): array
    {
        return [
            'bookings' => Booking::with(['motor', 'user'])->get(),
        ];
    }
}; ?>

<div class="space-y-6">
  <div>
    <flux:heading size="xl" level="1">Riwayat & Daftar Sewa</flux:heading>
    <flux:subheading>Daftar semua transaksi penyewaan motor Anda di EasyRent.</flux:subheading>
  </div>

  <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900 space-y-4">
    <!-- Table Placeholder -->
    <div class="text-sm text-zinc-400 py-16 text-center border border-dashed border-zinc-700 rounded-lg">
      Tabel Riwayat Penyewaan Saya (Kode Transaksi, Motor, Tanggal Sewa, Total Bayar, Status, Action Invoice)
    </div>
  </div>
</div>
