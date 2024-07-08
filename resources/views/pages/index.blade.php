<x-layout>
    <x-slot:header>
        <x-home-hero />
    </x-slot:header>
    <div class="px-4">
        <div class="max-w-6xl mx-auto py-16 gap-16">
            <x-home-articles />

            <div class="mx-auto max-w-7xl">
                <div class="mx-auto lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Alter Ego</h2>
                    <p class="max-w-xl mt-2text-lg leading-8">Campanhas, aventuras e tabelas para <strong>RPG Solo</strong></p>
                </div>
                <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-16 mt-16 lg:mx-0 lg:max-w-none">
                    <x-home-alter-ego title="A cidade berço dos assassinos em série" type="aventuras" href="a-cidade-berco-dos-assassinos-em-serie">
                        De tempos em tempos, uma pequena cidade se envolvida em assassinatos em série. Ninguém ainda
                        descobriu o porque disso acontecer e alguns acham que é uma maldição...
                    </x-home-alter-ego>
                </div>
            </div>

        </div>
    </div>
</x-layout>