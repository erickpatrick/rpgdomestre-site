<x-layout>
    <x-slot:header>
        <x-home-hero />
    </x-slot:header>
    <div class="px-4">
        <div class="max-w-6xl mx-auto py-16">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-16">
                <div class="p-8 border-l-8 border-yellow-300">
                    <h4 class="text-5xl xl:text-6xl font-bold">Alter Ego</h4>
                    <p class="pt-4 text-2xl">Campanhas, aventuras e tabelas para <strong>RPG Solo</strong></p>
                </div>
                <!--                <x-home-alter-ego title="A cidade que não conseguia dormir" type="aventuras"
                    href="a-cidade-que-nao-conseguia-dormir">
                    Uma enorme núvem monstro está atacando tudo em seu caminho: pessoas, animais, construções e cidades.
                    Algum aventureiro terá de achar uma forma de pará-la.
                </x-home-alter-ego>

                <x-home-alter-ego title="As mortíferas lágrimas da tormenta" type="aventuras"
                    href="as-mortiferas-lagrimas-da-tormenta">
                    Uma cidade inteira está sem dormir hà 5 dias e coisas ruins estão começando a ficar bem feias. Todos
                    que chegam lá para ajudar, acabam sem dormir também. Quem conseguirá ajudá-los?
                </x-home-alter-ego>

                <x-home-alter-ego title="O segredo do livro encantado" type="aventuras"
                    href="o-segredo-do-livro-encantado">
                    Uma criança acha um livro com o qual consegue se comunicar escrevendo em suas páginas. Pouco depois,
                    coisas muito estranhas começam a acontecer pelo bairro...
                </x-home-alter-ego>

                <x-home-alter-ego title="A gigante encatadora de aranhas" type="aventuras"
                    href="a-gigante-encantadora-de-aranhas">
                    As aranhas de uma cidade estão com um comportamento bem estranho. Volta e meia, centenhas delas saem
                    das casas onde ficam e se enfileram indo em direção à uma floresta próxima...
                </x-home-alter-ego>-->

                <x-home-alter-ego title="A cidade berço dos assassinos em série" type="aventuras" href="a-cidade-berco-dos-assassinos-em-serie">
                    De tempos em tempos, uma pequena cidade se envolvida em assassinatos em série. Ninguém ainda
                    descobriu o porque disso acontecer e alguns acham que é uma maldição...
                </x-home-alter-ego>
            </div>

            <livewire:newsletter-form />

            <x-home-articles />
        </div>
    </div>
</x-layout>
