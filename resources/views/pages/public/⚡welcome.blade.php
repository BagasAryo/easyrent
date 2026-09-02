<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Sewa Motor Mudah & Terpercaya')] #[Layout('layouts.guest')] class extends Component {
    // Guest landing page logic
}; ?>

<div class="w-full">
  <!-- Hero Section -->
  <section class="relative py-24 overflow-hidden bg-linear-to-b from-zinc-900 to-zinc-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
      <span
        class="inline-flex items-center gap-2 px-3 py-1 text-xs font-semibold text-emerald-400 bg-emerald-950/60 border border-emerald-800 rounded-full mb-6">
        <flux:icon icon="sparkles" class="size-4" /> Solusi Rental Motor Terbaik & Praktis
      </span>
      <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white max-w-4xl mx-auto leading-tight">
        Nikmati Perjalanan Nyaman Tanpa Batas Bersama <span class="text-emerald-400">EasyRent</span>
      </h1>
      <p class="mt-6 text-lg sm:text-xl text-zinc-400 max-w-2xl mx-auto">
        Pesan motor impian Anda secara online dalam hitungan menit. Armada bersih, terawat, dan harga transparan tanpa
        biaya tersembunyi.
      </p>
      <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
        <flux:button variant="primary" size="base" icon="magnifying-glass" href="#katalog"
          class="!h-12 !px-6 !text-base">
          Jelajahi Armada Motor
        </flux:button>
        <flux:button variant="subtle" size="base" href="#fitur" class="!h-12 px-6! !text-base">
          Pelajari Keunggulan
        </flux:button>
      </div>
    </div>
  </section>

  <!-- Quick Search Widget -->
  <section class="-mt-12 max-w-5xl mx-auto px-4 relative z-20">
    <div class="p-6 bg-zinc-900 border border-zinc-800 rounded-2xl shadow-2xl space-y-4">
      <h3 class="text-sm font-semibold text-zinc-300 uppercase tracking-wider">Cari Ketersediaan Motor</h3>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div>
          <label class="text-xs text-zinc-400 block mb-1">Tanggal Ambil</label>
          <input type="date"
            class="w-full bg-zinc-950 border border-zinc-800 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-emerald-500" />
        </div>
        <div>
          <label class="text-xs text-zinc-400 block mb-1">Tanggal Kembali</label>
          <input type="date"
            class="w-full bg-zinc-950 border border-zinc-800 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-emerald-500" />
        </div>
        <div class="flex items-end">
          <flux:button variant="primary" class="w-full">
            Cari Motor Available
          </flux:button>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="fitur" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl font-bold text-white">Mengapa Memilih EasyRent?</h2>
      <p class="text-zinc-400 mt-2">Komitmen kami menyajikan pengalaman rental motor terbaik untuk Anda.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="p-8 rounded-2xl bg-zinc-900/50 border border-zinc-800">
        <div
          class="size-12 rounded-xl bg-emerald-950/60 border border-emerald-800 flex items-center justify-center text-emerald-400 mb-6">
          <flux:icon icon="truck" class="size-6" />
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Armada Terawat & Prima</h3>
        <p class="text-zinc-400 text-sm">Semua motor rutin diservis dan dibersihkan secara steril sebelum diserahkan
          kepada Anda.</p>
      </div>

      <div class="p-8 rounded-2xl bg-zinc-900/50 border border-zinc-800">
        <div
          class="size-12 rounded-xl bg-emerald-950/60 border border-emerald-800 flex items-center justify-center text-emerald-400 mb-6">
          <flux:icon icon="banknotes" class="size-6" />
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Harga Jujur & Transparan</h3>
        <p class="text-zinc-400 text-sm">Tidak ada biaya tersembunyi. Semua tarif sewa transparan sejak awal pemesanan.
        </p>
      </div>

      <div class="p-8 rounded-2xl bg-zinc-900/50 border border-zinc-800">
        <div
          class="size-12 rounded-xl bg-emerald-950/60 border border-emerald-800 flex items-center justify-center text-emerald-400 mb-6">
          <flux:icon icon="clock" class="size-6" />
        </div>
        <h3 class="text-xl font-bold text-white mb-2">Layanan Bantuan 24/7</h3>
        <p class="text-zinc-400 text-sm">Tim customer care kami siap membantu kendala perjalanan Anda kapan saja 24 jam
          sehari.</p>
      </div>
    </div>
  </section>

  <!-- Catalog Preview Section -->
  <section id="katalog" class="py-16 bg-zinc-900/30 border-t border-b border-zinc-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12 gap-4">
        <div>
          <h2 class="text-3xl font-bold text-white">Armada Motor Populer</h2>
          <p class="text-zinc-400 mt-2">Pilih motor yang sesuai dengan kebutuhan perjalanan Anda.</p>
        </div>
        <flux:button variant="ghost" icon-trailing="arrow-right">
          Lihat Semua Motor
        </flux:button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Motor Item Card 1 -->
        <div class="rounded-2xl bg-zinc-900 border border-zinc-800 overflow-hidden flex flex-col justify-between">
          <div class="aspect-video bg-zinc-950 flex items-center justify-center text-zinc-600 relative">
            <flux:icon icon="truck" class="size-16" />
            <span
              class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold bg-emerald-950 border border-emerald-800 text-emerald-400 rounded-md">Tersedia</span>
          </div>
          <div class="p-6 space-y-4">
            <div>
              <h4 class="text-lg font-bold text-white">Toyota Innova Zenix</h4>
              <p class="text-xs text-zinc-400">MPV • Automatic • 7 Kursi</p>
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
              <div>
                <span class="text-xl font-bold text-white">Rp 650.000</span>
                <span class="text-xs text-zinc-400">/ hari</span>
              </div>
              <flux:button variant="primary" size="sm">Sewa Sekarang</flux:button>
            </div>
          </div>
        </div>

        <!-- Motor Item Card 2 -->
        <div class="rounded-2xl bg-zinc-900 border border-zinc-800 overflow-hidden flex flex-col justify-between">
          <div class="aspect-video bg-zinc-950 flex items-center justify-center text-zinc-600 relative">
            <flux:icon icon="truck" class="size-16" />
            <span
              class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold bg-emerald-950 border border-emerald-800 text-emerald-400 rounded-md">Tersedia</span>
          </div>
          <div class="p-6 space-y-4">
            <div>
              <h4 class="text-lg font-bold text-white">Honda HR-V Turbo</h4>
              <p class="text-xs text-zinc-400">SUV • Automatic • 5 Kursi</p>
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
              <div>
                <span class="text-xl font-bold text-white">Rp 550.000</span>
                <span class="text-xs text-zinc-400">/ hari</span>
              </div>
              <flux:button variant="primary" size="sm">Sewa Sekarang</flux:button>
            </div>
          </div>
        </div>

        <!-- Motor Item Card 3 -->
        <div class="rounded-2xl bg-zinc-900 border border-zinc-800 overflow-hidden flex flex-col justify-between">
          <div class="aspect-video bg-zinc-950 flex items-center justify-center text-zinc-600 relative">
            <flux:icon icon="truck" class="size-16" />
            <span
              class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold bg-emerald-950 border border-emerald-800 text-emerald-400 rounded-md">Tersedia</span>
          </div>
          <div class="p-6 space-y-4">
            <div>
              <h4 class="text-lg font-bold text-white">Toyota Avanza Veloz</h4>
              <p class="text-xs text-zinc-400">MPV • Manual • 7 Kursi</p>
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
              <div>
                <span class="text-xl font-bold text-white">Rp 400.000</span>
                <span class="text-xs text-zinc-400">/ hari</span>
              </div>
              <flux:button variant="primary" size="sm">Sewa Sekarang</flux:button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
