<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- <script defer src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script> -->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex h-screen overflow-y-hidden" x-data="{ sidebarOpen: true }">
            @include('layouts.sidebar-navigation')
            <div class="flex flex-col flex-1 h-full overflow-hidden">
                @include('layouts.navigation')
    
                {{-- <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header> --}}
                <!-- Page Content -->
                <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
