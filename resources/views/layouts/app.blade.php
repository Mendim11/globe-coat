<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Globe Coat creates architectural surfaces in rammed earth, polished plaster, and lime finishes.">
        <title>@yield('title', 'Globe Coat — The Art of Architectural Surfaces')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cairo:400,600,700&display=swap" rel="stylesheet">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
            <style type="text/tailwindcss">
                @theme {
                    --font-sans: 'Cairo', ui-sans-serif, system-ui, sans-serif;
                    --color-navy: #081c3a;
                    --color-teal: #45bac5;
                    --color-ink: #414846;
                    --color-footer: #1a1c1c;
                    --color-mist: #f9f9f9;
                }
            </style>
        @endif
    </head>
    <body class="bg-neutral-100 font-sans text-ink antialiased">
        <div class="mx-auto min-h-screen max-w-[1280px] bg-white">
            @include('partials.header')

            <main>
                {{ $slot ?? '' }}
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
    </body>
</html>
