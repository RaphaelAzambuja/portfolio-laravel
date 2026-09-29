<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Raphael Azambuja' }}</title>

    <meta name="description" content="{{ $description ?? 'Desenvolvimento de software sob medida para empresas.' }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-60 text-30 antialiased">

    @if ($header ?? true)
    <x-layout.header />
    @endif

    <main class="font-body">
        {{ $slot }}
    </main>

    @if ($footer ?? true)
    <x-layout.footer />
    @endif

    @livewireScripts
</body>

</html>
