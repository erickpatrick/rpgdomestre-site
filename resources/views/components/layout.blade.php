@props([
    'menu' => '/',
    'title' => null,
    'header' => null,
    'description' => 'Onde o mestre cria, reinventa, modifica e publica RPG, principalmente Solo RPG.',
    'keywords' => 'rpg, roleplaing game, rpg do mestre, rpgdm, jogos de interpretação de papeis, interpretação',
])

@php
    $finalTitle = isset($title) ? "{$title} | RPG do Mestre" : 'RPG do Mestre';
@endphp

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->full() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $description }}">

    <meta name="twitter:site" content="@rpgdm">
    <meta name="twitter:creator" content="@erickpatrick">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $finalTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ url('/images/mestre.jpg') }}">

    <meta property="og:url" content="{{ url()->full() }}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="RPGdoMestre">
    <meta property="og:title" content="{{ $finalTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ url('/images/mestre.jpg') }}">

    <x-feed-links />

    <title>{{ $finalTitle }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-white">
    <div class="bg-white">
        <x-header>
            {{ $header }}
        </x-header>

        {{ $slot }}
    </div>

    <x-footer />
    @livewireScripts
    <script>
        window.addEventListener('livewire:navigated', () => window.scrollTo({ top: 0 }));
    </script>
</body>

</html>
