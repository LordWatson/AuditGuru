<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ theme: localStorage.getItem('theme') || 'light' }"
      x-init="document.documentElement.classList.add(theme)"
      x-on:theme-change.window="theme = $event.detail; document.documentElement.classList = [$event.detail]; localStorage.setItem('theme', $event.detail);">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- FontAwesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-[#1a1a1a] flex">
        {{-- Sidebar --}}
        <div class="fixed top-0 left-0 h-screen w-48 bg-white dark:bg-[#313131] shadow-md flex flex-col justify-between">

            <div class="flex flex-col h-full justify-center items-center">
                @foreach(Auth::user()->viewableModules() as $module)
                    <div class="py-3 px-6 text-lg text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#414141] cursor-pointer">
                        <x-nav-link :href="route($module->url . '.index')" :active="request()->is($module->url)">
                            {{ __($module->name) }}
                        </x-nav-link>
                    </div>
                @endforeach
            </div>

            {{-- Logout Button --}}
            <form method="POST" action="{{ route('logout') }}" class="py-4">
                @csrf
                <button
                    type="submit"
                    class="w-full hover:bg-gray-100 dark:bg-[#313131] dark:hover:bg-[#414141] dark:text-gray-200 py-2 px-4 text-center block"
                >
                    {{ __('Logout') }}
                </button>
            </form>

            <x-dark-theme-button />
        </div>

        {{-- Main Content Area --}}
        <div class="flex-1 ml-48">
            @isset($header)
                <header class="bg-white dark:bg-[#313131] shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            {{-- Errors Toaster --}}
            @if($errors->any())
                @include('components.session-errors', ['errors' => $errors])
            @endif

            {{-- Status Toaster --}}
            @if(session('status') && isset(session('status')['message'], session('status')['type'], session('status')['colour']))
                @include('components.session-status-toaster')
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    </body>
</html>
