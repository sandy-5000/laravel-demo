<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Compiler') }}</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="relative min-h-screen bg-gray-900 flex flex-col">
        @include('layouts.compiler.navigation')

        <!-- Page Content -->
        <main class="px-0">
            {{ $slot }}
        </main>

        <!-- Footer Content -->
        <footer class="mt-auto w-full h-[65px] v-center bg-gray-800">
            <div class="mx-5 md:mx-16 lg:mx-32">
                <span class="text-slate-100 text-sm">Copyright © 2023 Darkube Complier. All rights reserved.</span>
            </div>
        </footer>
    </div>
</body>

</html>
