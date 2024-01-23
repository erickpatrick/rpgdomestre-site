@props(['title' => '', 'href' => '', 'type' => ''])

<div class="grid gap-4 text-slate-900">
    <h4 class="text-3xl font-semibold">
        <a href="/alter-ego/{{ $type }}/{{ $href }}" class="inline-block font-semibold hover:underline underline-offset-4 decoration-4 decoration-yellow-300" wire:navigate>
            {{ $title }}
        </a>
    </h4>
    <p class="text-lg text-slate-600">{{ $slot }}</p>
</div>
