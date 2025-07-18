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
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
        {{-- Sidebar --}}
        <div class="fixed top-0 left-0 h-screen w-48 bg-white dark:bg-gray-800 shadow-md">
            <div class="flex flex-col h-full justify-center items-center">
                @foreach(Auth::user()->viewableModules() as $module)
                    <div class="py-3 px-6 text-lg text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                        <x-nav-link :href="route($module->url . '.index')" :active="request()->is($module->url)">
                            {{ __($module->name) }}
                        </x-nav-link>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Main Content Area --}}
        <div class="flex-1 ml-48">
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    </body>
</html>
