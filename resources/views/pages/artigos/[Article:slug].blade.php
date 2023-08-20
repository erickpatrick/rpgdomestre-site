@php
    $serieSiblings = $article->getSerieSiblings();
@endphp

<x-layout>
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-2xl md:text-4xl">{{ $article->title }}</h2>

        @if ($serieSiblings)
        <details class="p-4 my-4 bg-gray-100 border border-gray-300 rounded-lg">
            <summary>Esse artigo faz parte da série <strong>{{ $article->series->name }}</strong>. Você pode <a href="/series/{{ $article->series->slug }}" class="underline">visitar a página da série</a> ou clicar para ver a listagem abaixo.</summary>
            <ul class="pt-4 pl-8 list-disc">
                @foreach ($serieSiblings as $sibling)
                <li class="py-1"><a href="/artigos/{{ $sibling->slug }}" class="underline">{{ $sibling->title }}</a></li>
                @endforeach
            </ul>
        </details>
        @endif
    </div>

    <x-content-body>
        <x-buk-markdown flavor="github">
        {!! $article->content !!}
        </x-buk-markdown>
    </x-content-body>
</x-layout>
