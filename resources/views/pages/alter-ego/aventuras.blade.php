<x-layout menu="/alter-ego" title="Aventuras"
    description="Listagem com as aventuras para RPG Solo que criei. Elas são facilmente adaptáveis para grupos, mas feitas especificamente para jogadores Solo.">
    <x-container>
        <div class="max-w-6xl mx-auto grid gap-8">
            <div class="flex flex-col gap-4 text-center">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-24 h-24 lg:w-48 lg:h-48 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>


                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold">Aventuras</h2>
                <p class="text"></p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16">
                {{-- @foreach ($articles as $article)
                    <div class="flex flex-col gap-4">
                        <div class="-mb-4"><x-content-time :date="$article->created_at" /></div>
                        <h3 class="block text-lg sm:text-xl md:text-xl lg:text-3xl font-bold">
                            <a class="hover:underline underline-offset-4 decoration-4 decoration-yellow-300"
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
