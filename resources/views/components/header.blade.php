<div class="px-4">
    <div class="max-w-6xl mx-auto">
        <nav class="flex justify-between align-middle items-center">
            <h1 class="text-2xl py-4 font-bold">
                <a href="{{ url('/') }}" wire:navigate>RPG do Mestre</a>
            </h1>
            <div class="hidden md:flex gap-8">
                <a href="/artigos" class="py-4 font-semibold underline underline-offset-4 hover:decoration-1 hover:decoration-wavy" wire:navigate>Artigos</a>
                <a href="/alter-ego" class="py-4 font-semibold underline underline-offset-4 hover:decoration-1 hover:decoration-wavy" wire:navigate>Alter Ego</a>
            </div>
            <x-header-menu />
        </nav>
        {{ $slot }}
    </div>
</div>