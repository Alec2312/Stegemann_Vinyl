<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stegemann Vinyl') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=archivo-black:400|figtree:400,600,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-black antialiased">
<div class="min-h-screen bg-[#e8e3d8] flex flex-col items-center py-12 px-4">

    <div class="mb-8">
        <a href="/" class="group">
            <div class="bg-black p-4 border-4 border-black group-hover:rotate-12 transition-transform duration-300 shadow-[6px_6px_0px_0px_rgba(251,191,36,1)]">
                <x-application-logo class="w-16 h-16 fill-current bg-[#E8E3D8]" />
            </div>
        </a>
    </div>

    <div class="w-full">
        {{ $slot }}
    </div>

    <footer class="mt-12 font-black uppercase text-xs tracking-[0.2em] text-black/40">
        &copy; {{ date('Y') }} Stegemann Vinyl Marketplace
    </footer>
</div>
</body>
</html>
