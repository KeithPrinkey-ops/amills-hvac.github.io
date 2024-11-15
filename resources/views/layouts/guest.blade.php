<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'A-Mills HVAC') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('/profile-photos/DALL·E-2024-10-06-14.27.54-A-Victorian-style-HVAC-icon-for-A-MILLS-HVAC.png') }}" type="image/png">
    <!-- Environment Based Loading -->
    @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app-CztcKtoy.css') }}">
        <script src="{{ asset('build/assets/app-C4m6Y98P.css') }}" defer></script>
    @endif

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner />
<!-- Ensure proper structure for page content -->
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('navigation-menu-guest')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>


<!-- Livewire Scripts -->
@livewireScripts
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
<section class="py-10 bg-black tails-selected-element">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center md:flex-row md:justify-between">
            <a href="{{ route('welcome') }}" class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg mb-7 bg-gradient-to-br from-purple-500 via-indigo-600 to-blue-500 rounded-xxl">
                <img alt="a-mills" src="{{ asset('/profile-photos/DALL·E-2024-10-06-14.27.54-A-Victorian-style-HVAC-icon-for-A-MILLS-HVAC.png') }}">
            </a>

            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4"> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="12.145" cy="3.892" r="1"></circle>
                            <path d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"></path>
                            <path d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"></path>
                        </g>
                    </svg> </a> </div>
        </div>
        <div class="flex flex-col justify-between text-center md:flex-row">
            <p class="order-last text-sm leading-tight text-gray-500 md:order-first"> Crafted by&nbsp;<a href="https://devdojo.com/tails" class="text-white">Prinkey Consulting</a>. Built with ❤️ by our team. </p>
            <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                <li>
                    <a href="{{ route('consultation.request') }}" class="px-6 py-2 font-semibold text-white bg-gradient-to-r from-primary-500 to-primary-700 rounded-b-xl hover:from-primary-600 hover:to-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                        Request Consultation
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
</html>
