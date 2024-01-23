@php
use App\Models\Article;

$articles = Article::whereNot('status', 'draft')
->orderBy('id', 'desc')
->cursorPaginate(10);
@endphp

<x-layout menu="/artigos" title="Artigos" description="Listagem com os artigos que escrevo contendo minhas opiniões, descobertas e aprendizados sobre design de sistemas, programação, e tópicos relacionados">
    <x-container>
        <div class="max-w-6xl mx-auto grid gap-8">
            <div class="flex flex-col gap-4 text-center">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 lg:w-48 lg:h-48 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">Artigos</h2>
                <p class="text"></p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16">
                @foreach ($articles as $article)
                <div class="flex flex-col gap-4">
                    <div class="-mb-4"><x-content-time :date="$article->created_at" /></div>
                    <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                        <a class="hover:underline underline-offset-4 decoration-4 decoration-yellow-300" href="/artigos/{{ $article->slug }}" wire:navigate>{{ $article->title }}</a>
                    </h3>
                    <p class="text-gray-600 md:text-lg lg:text-xl">
                        {{ $article->description }}
                    </p>
                </div>
                @endforeach
            </div>

            {{ $articles->links() }}
        </div>
    </x-container>
</x-layout>
