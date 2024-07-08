@props(['siblings' => null, 'serie', 'slug'])

@if ($siblings)
<details class="p-4 my-8 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer">
    <summary>Esse artigo faz parte da série <strong>{{ $serie }}</strong>. Você pode <a href="/artigos/series/{{ $slug }}" class="underline hover:underline decoration-2 decoration-gray-400 underline-offset-4" wire:navigate>visitar a página da
            série</a> ou clicar para ver a listagem abaixo.</summary>
    <ul class="pt-4 pl-8 list-disc">
        @foreach ($siblings as $sibling)
        <li class="py-1">
            <a href="/artigos/{{ $sibling->slug }}" class="hover:underline decoration-2 decoration-gray-400 underline-offset-4" wire:navigate>{{ $sibling->title }}</a>
        </li>
        @endforeach
    </ul>
</details>
@endif