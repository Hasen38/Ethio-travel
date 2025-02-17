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
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center pt-6 min-h-screen bg-gradient-to-br from-blue-100 via-white to-purple-100 sm:justify-center sm:pt-0">
            <div class="transition-transform duration-300 transform hover:scale-105">
                <a href="/">
                    {{-- <x-application-logo class="w-24 h-24 text-blue-600 fill-current" /> --}}
                </a>
            </div>

            <div class="overflow-hidden px-8 py-6 mt-6 w-full bg-white border border-gray-100 shadow-xl backdrop-blur-sm sm:max-w-md sm:rounded-xl bg-white/90">
                {{ $slot }}
            </div>

            <div class="mt-8 text-sm text-center text-gray-500">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </div>
        </div>
    </body>
</html>
