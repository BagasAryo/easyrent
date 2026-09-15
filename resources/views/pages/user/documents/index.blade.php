<?php

use App\Models\Document;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Dokumen Saya')] #[Layout('layouts.user')] class extends Component {
    public function with(): array
    {
        return [
            'documents' => Document::where('user_id', auth()->id())->get(),
        ];
    }
}; ?>

<div class="space-y-6">
  <div>
    <flux:heading size="xl" level="1">Dokumen Saya</flux:heading>
    <flux:subheading>Daftar semua dokumen yang Anda simpan di EasyRent.</flux:subheading>
  </div>

  <div class="space-y-4">
    @if ($documents->count() === 0)
      <div
        class="flex flex-col items-center justify-center text-sm text-zinc-500 py-16 text-center border border-dashed border-zinc-300 dark:border-zinc-700 rounded-xl bg-zinc-50/50 dark:bg-zinc-900/50">
        <flux:icon.document-text class="w-8 h-8 mb-3 text-zinc-400" />
        <p>Belum ada dokumen.</p>
      </div>
    @else
      <div class="overflow-hidden rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-900">
        <flux:table class="px-4">
          <flux:table.columns>
            <flux:table.column>No</flux:table.column>
            <flux:table.column>Jenis Dokumen</flux:table.column>
            <flux:table.column>Nomor Dokumen</flux:table.column>
            <flux:table.column>Aksi</flux:table.column>
          </flux:table.columns>

          <flux:table.rows>
            @foreach ($documents as $document)
              <flux:table.row>
                <flux:table.cell>
                  {{ $loop->iteration }}
                </flux:table.cell>
                <flux:table.cell>
                  {{ $document->type ?? '-' }}
                </flux:table.cell>
                <flux:table.cell>
                  {{ $document->number ?? '-' }}
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
