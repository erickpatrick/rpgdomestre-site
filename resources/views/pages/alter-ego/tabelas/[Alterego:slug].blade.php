<x-layout>
    <div class="p-4 pt-12">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold max-w-4xl mx-auto mb-2 text-center">{{ $alterego->title }}</h2>
        </div>

        <x-content-body>
            <x-buk-markdown flavor="github">
            {!! $alterego->content !!}
            </x-buk-markdown>
        </x-content-body>
    </div>
</x-layout>
