@props(['title' => '', 'href' => '', 'type' => ''])

<article class="flex flex-col items-start justify-between">
    <div class="group relative">
        <h3 class="text-lg font-semibold leading-6 text-balance">
            <a href="/alter-ego/{{ $type }}/{{ $href }}" class="underline underline-offset-4 hover:decoration-1 hover:decoration-wavy text-balance" wire:navigate>
                {{ $title }}
            </a>
        </h3>
        <p class="mt-5 line-clamp-3 text-sm leading-6 text-balance">{{ $slot }}</p>
    </div>
</article>