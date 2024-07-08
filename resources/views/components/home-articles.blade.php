@php
use App\Models\Article;

$articles = Article::whereStatus('published')
->orderBy('id', 'desc')
->limit(3)
->get();
@endphp

<div class="mx-auto max-w-7xl pb-32">
    <div class="mx-auto lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Artigos</h2>
        <p class="max-w-xl mt-2 text-lg leading-8">Algumas ideias e dicas que aparecem quando estou
            jogando, discutindo ou conversando sobre RPG</p>
    </div>
    <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-16 mt-16 lg:mx-0 lg:max-w-none">
        @foreach ($articles as $article)
        <article class="flex flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
                <x-content-time :date="$article->created_at" />
            </div>
            <div class="group relative">
                <h3 class="text-lg font-semibold leading-6 text-balance">
                    <a href="/artigos/{{ $article->slug }}" class="underline underline-offset-4 hover:decoration-1 hover:decoration-wavy text-balance" wire:navigate>
                        {{ $article->title }}
                    </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-balance">{{ $article->description }}</p>
            </div>
        </article>
        @endforeach
    </div>
</div>