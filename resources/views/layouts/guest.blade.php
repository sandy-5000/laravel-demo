<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="h-screen a-center bg-gray-900 dark:bg-gray-900">
        <div style="width: min(100%, 500px);" class="min-h-screen flex flex-col justify-center pt-6 px-3 sm:pt-0">
            <div class="a-center">
                <a href="/" class="flex justify-between">
                    <x-logo class="h-16 mr-3 fill-current text-gray-500" />
                    <div class="a-center">
                        <h1 class="text-lg block font-semibold logo-text">DARKUBE</h1>
                    </div>
                </a>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
