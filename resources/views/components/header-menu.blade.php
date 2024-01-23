<div class="md:hidden relative" x-data="{ open: false }">
    <!-- Mobile menu button -->
    <button type="button"
        class="inline-flex items-center justify-center rounded-md p-2 text-slate-900 hover:bg-yellow-200 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500"
        aria-controls="mobile-menu" aria-expanded="false" @click="open = !open;">
        <span class="absolute -inset-0.5"></span>
        <span class="sr-only">Open main menu</span>
        <template x-if="open == false">
            <!-- Icon when menu is closed. Menu open: "hidden", Menu closed: "block" -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" x-show="open == false">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </template>
        <template x-if="open == true">
            <!-- Icon when menu is open. Menu open: "block", Menu closed: "hidden" -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" x-show="open == true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </template>
    </button>
    <template x-if="open == true">
        <div class="absolute right-0 z-50 w-[280px] p-4 flex flex-col bg-yellow-300 shadow-lg">
            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
            <a href="/artigos" class="py-4 font-semibold hover:underline" wire:navigate>Artigos</a>
            <a href="/alter-ego" class="py-4 font-semibold hover:underline" wire:navigate>Alter Ego</a>
        </div>
    </template>
</div>
