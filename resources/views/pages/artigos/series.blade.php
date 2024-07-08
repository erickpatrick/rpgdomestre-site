@php
use App\Models\Serie;

$series = Serie::whereNot('status', 'draft')
->orderBy('id', 'desc')
->cursorPaginate(10);
@endphp

<x-layout menu="/artigos" title="Séries de artigos" description="Listagem com as séries de artigos que escrevi, as quais constroem uma ideia um atrás do outro, ou tratam de assuntos semelhantes suficiente para serem agrupados">
    <x-container>
        <div class="max-w-6xl mx-auto grid gap-8">
            <div class="flex flex-col gap-4 text-center">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 lg:w-48 lg:h-48 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>

                <h2 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">Séries</h2>
                <p class="text"></p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16">
                @foreach ($series as $serie)
                <div class="flex flex-col gap-4">
                    <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                        <a class="underline underline-offset-4 decoration-1 hover:decoration-wavy" href="/artigos/series/{{ $serie->slug }}" wire:navigate>{{ $serie->name }}</a>
                    </h3>
                    <p class="text-gray-600 md:text-lg lg:text-xl">
                        {{ $serie->description }}
                    </p>
                </div>
                @endforeach
            </div>

            {{ $series->links() }}
        </div>
    </x-container>
</x-layout>