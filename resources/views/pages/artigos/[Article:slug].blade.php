<x-layout>
    <div class="p-4 pt-12">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">{{ $article->title }}</h2>
            <div class="flex flex-col sm:flex-row sm:gap-4 justify-center text-sm leading-6 text-gray-600 text-center">
                <x-content-time :date="$article->created_at" />
                <span class="hidden sm:block">-</span>
                <x-content-reading-time :length="Str::wordCount($article->content)" />
            </div>

            <x-series-siblings :siblings="$article->getSerieSiblings()" :serie="$article->series->name ?? null" :slug="$article->series->slug ?? null" />
        </div>

        <x-content-body>
            <x-buk-markdown flavor="github">
            {!! $article->content !!}
            </x-buk-markdown>
        </x-content-body>
    </div>
</x-layout>
