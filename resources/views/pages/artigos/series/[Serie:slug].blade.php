<x-layout>
    <x-container>
        <div class="p-4 pt-12">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center text-balance">
                    {{ $serie->name }}
                </h2>
            </div>

            <x-content-body>
                <x-buk-markdown flavor="github">
                    {!! $serie->description !!}
                </x-buk-markdown>

                @if ($serie->hasArticles())
                <p>Veja todos os artigos da série:</p>
                <ul class="">
                    @foreach ($serie->articles()->get() as $article)
                    <li><a href="/artigos/{{ $article->slug }}" wire:navigate>{{ $article->title }}</a></li>
                    @endforeach
                </ul>
                @else
                <p>Ainda não temos artigos registrados à essa série</p>
                @endif
            </x-content-body>
        </div>
    </x-container>
</x-layout>