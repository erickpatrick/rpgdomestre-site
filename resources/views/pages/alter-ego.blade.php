@php
use App\Models\Alterego;

$alteregos = Alterego::whereNot('status', 'draft')
->orderBy('id', 'desc')
->cursorPaginate(10);
@endphp

<x-layout menu="/alter-ego" title="Alter Ego" description="Listagem com todas as aventuras, campanhas, e tabelas para RPG Solo que já publiquei no RPG do Mestre">
    <x-container>
        <div class="max-w-6xl mx-auto grid gap-8">
            <div class="flex flex-col gap-4 text-center">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 lg:w-48 lg:h-48 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>

                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">Alter Ego</h2>
                <p class="text"></p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16">
                @foreach ($alteregos as $ego)
                <div class="flex flex-col gap-4">
                    <div class="-mb-4"><x-content-time :date="$ego->created_at" /></div>
                    <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                        <a class="hover:underline underline-offset-4 decoration-4 decoration-yellow-300" href="/alter-ego/{{ $ego->type }}/{{ $ego->slug }}" wire:navigate>{{ $ego->title }}</a>
                    </h3>
                    <p class="text-gray-600 md:text-lg lg:text-xl">
                        {{ $ego->description }}
                    </p>
                </div>
                @endforeach
            </div>

            {{ $alteregos->links() }}
        </div>
    </x-container>
</x-layout>
