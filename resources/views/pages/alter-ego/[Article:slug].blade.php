<x-layout>
    <div class="p-4 pt-12">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold">{{ $article->title }}</h2>

            <x-series-siblings :siblings="$article->getSerieSiblings()" :serie="$article->series->name ?? null" :slug="$article->series->slug ?? null" />
        </div>

        <x-content-body>
            <x-buk-markdown flavor="github">
            {!! $article->content !!}
            </x-buk-markdown>
        </x-content-body>
    </div>
</x-layout>
