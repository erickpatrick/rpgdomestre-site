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
    <h2>{{ $page->title }}</h2>

    <x-buk-markdown>{!! $page->content !!}</x-buk-markdown>
</x-layout>
