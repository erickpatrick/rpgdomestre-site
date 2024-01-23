@php
    use App\Models\Page;

    $page = Page::whereNot('status', 'draft')
        ->whereSlug('politica-de-privacidade')
        ->get()->pop();

    abort_unless($page, 404);
@endphp

<x-layout
    title="{{ $page->title }}"
    description="{{ $page->description }}">
    <div class="p-4 pt-12">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">{{ $page->title }}</h2>
        </div>

        <x-content-body>
            <x-buk-markdown flavor="github">
                {!! $page->content !!}
            </x-buk-markdown>
        </x-content-body>
    </div>
</x-layout>
