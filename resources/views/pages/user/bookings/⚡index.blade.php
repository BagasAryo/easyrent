<?php

use App\Models\Booking;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Carbon\Carbon;

new #[Title('Riwayat Booking')] #[Layout('layouts.user')] class extends Component {
    public function with(): array
    {
        return [
            'bookings' => Booking::with(['motorcycle', 'user'])->get(),
        ];
    }
}; ?>

<div class="space-y-6">
  <div>
    <flux:heading size="xl" level="1">Riwayat & Daftar Sewa</flux:heading>
    <flux:subheading>Daftar semua transaksi penyewaan motor Anda di EasyRent.</flux:subheading>
  </div>

  <div class="space-y-4">
    @if ($bookings->count() === 0)
      <div
        class="flex flex-col items-center justify-center text-sm text-zinc-500 py-16 text-center border border-dashed border-zinc-300 dark:border-zinc-700 rounded-xl bg-zinc-50/50 dark:bg-zinc-900/50">
        <flux:icon.document-text class="w-8 h-8 mb-3 text-zinc-400" />
        <p>Belum ada riwayat penyewaan.</p>
      </div>
    @else
      <div class="overflow-hidden rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-900">
        <flux:table class="px-4">
          <flux:table.columns>
            <flux:table.column>Kode Transaksi</flux:table.column>
            <flux:table.column>Motor</flux:table.column>
            <flux:table.column>Tanggal Sewa</flux:table.column>
            <flux:table.column>Total Bayar</flux:table.column>
            <flux:table.column>Status</flux:table.column>
            <flux:table.column>Aksi</flux:table.column>
          </flux:table.columns>

          <flux:table.rows>
            @foreach ($bookings as $booking)
              <flux:table.row>
                <flux:table.cell class="font-bold">
                  #{{ $booking->booking_code }}
                </flux:table.cell>
                <flux:table.cell>
                  {{ $booking->motorcycle->name ?? '-' }}
                </flux:table.cell>
                <flux:table.cell>
                  {{ Carbon::parse($booking->start_date)->format('d M Y') }} -
                  {{ Carbon::parse($booking->end_date)->format('d M Y') }}
                </flux:table.cell>
                <flux:table.cell>
                  Rp{{ number_format($booking->total_price, 0, ',', '.') }}
                </flux:table.cell>
                <flux:table.cell>
                  @if (in_array(strtolower($booking->status), ['pending', 'unpaid']))
                    <flux:badge color="yellow" size="sm" inset="top bottom">Pending</flux:badge>
                  @elseif(in_array(strtolower($booking->status), ['paid', 'success', 'completed']))
                    <flux:badge color="green" size="sm" inset="top bottom">Sukses</flux:badge>
                  @elseif(in_array(strtolower($booking->status), ['cancelled', 'failed']))
                    <flux:badge color="red" size="sm" inset="top bottom">Batal</flux:badge>
                  @else
                    <flux:badge color="zinc" size="sm" inset="top bottom">{{ ucfirst($booking->status) }}
                    </flux:badge>
                  @endif
                </flux:table.cell>
                <flux:table.cell>
                  <flux:button size="sm" variant="ghost" icon="eye" wire:navigate>
                    {{-- {{ __('Lihat Detail') }} --}}
                  </flux:button>
                </flux:table.cell>
              </flux:table.row>
            @endforeach
          </flux:table.rows>
        </flux:table>
      </div>
    @endif
  </div>
</div>
