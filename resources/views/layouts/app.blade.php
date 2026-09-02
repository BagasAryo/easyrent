@if (auth()->user()?->role === 'admin')
  <x-layouts::admin.sidebar :title="$title ?? null">
    <flux:main>
      {{ $slot }}
    </flux:main>
  </x-layouts::admin.sidebar>
@else
  <x-layouts::user.sidebar :title="$title ?? null">
    <flux:main>
      {{ $slot }}
    </flux:main>
  </x-layouts::user.sidebar>
@endif
