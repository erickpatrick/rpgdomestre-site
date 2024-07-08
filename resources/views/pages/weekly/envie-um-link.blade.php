@php
use App\Models\Page;

$page = Page::whereNot('status', 'draft')
->whereSlug('envie-um-link')
->get()->pop();

abort_unless($page, 404);
@endphp

<x-layout
    menu="/artigos"
    title="{{ $page->title }}"
    description="{{ $page->description }}">
    <h2 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">{{ $article->title }}</h2>

    <x-buk-markdown>{!! $page->content !!}</x-buk-markdown>
</x-layout>