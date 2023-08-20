@php
    use App\Models\Article;

    $articles = Article::whereNot('status', 'draft')
        ->orderBy('id', 'desc')
        ->cursorPaginate(10);
@endphp

<x-layout menu="/artigos" title="Artigos" description="Listagem com os artigos que escrevo contendo minhas opiniões, descobertas e aprendizados sobre design de sistemas, programação, e tópicos relacionados">
    <x-container>
        <div class="max-w-5xl mx-auto py-16 md:py-24 grid gap-8">
            @foreach ($articles as $article)
                <div>
                    <x-content-time :date="$article->created_at" />
                    <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                        <a class="hover:underline hover:underline-offset-8 decoration-2 decoration-wavy decoration-blue-600" href="/artigos/{{ $article->slug }}">{{ $article->title }}<a/>
                    </h3>
                    <p class="mt-3 text-gray-600 md:text-lg lg:text-xl">
                        {{ $article->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </x-container>
</x-layout>
