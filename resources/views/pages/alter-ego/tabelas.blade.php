<x-layout menu="/alter-ego" title="Tabelas"
    description="Listagem com as campanhas para RPG Solo que criei. Elas são facilmente adaptáveis para grupos, mas feitas especificamente para jogadores Solo.">
    <x-container>
        <div class="max-w-6xl mx-auto grid gap-8">
            <div class="flex flex-col gap-4 text-center">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-24 h-24 lg:w-48 lg:h-48 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                </svg>

                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold">Tabelas</h2>
                <p class="text"></p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16">
                {{-- @foreach ($articles as $article)
                    <div class="flex flex-col gap-4">
                        <div class="-mb-4"><x-content-time :date="$article->created_at" /></div>
                        <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                            <a class="hover:underline underline-offset-4 decoration-4 decoration-gray-300"
                                href="/artigos/{{ $article->slug }}" wire:navigate>{{ $article->title }}</a>
                </h3>
                <p class="text-gray-600 md:text-lg lg:text-xl">
                    {{ $article->description }}
                </p>
            </div>
            @endforeach --}}
        </div>
        </div>
    </x-container>
</x-layout>