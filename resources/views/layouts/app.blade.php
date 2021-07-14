<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest')}}">
        <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- <script defer src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script> -->
    </head>
    <body class="font-sans antialiased" x-data="setup()">
        <div class="min-h-screen bg-gray-100 flex h-screen overflow-y-hidden">
            @include('layouts.sidebar-navigation')
            <div class="flex flex-col flex-1 h-full overflow-hidden">
                @include('layouts.navigation')
    
                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="container mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                <!-- Page Content -->
                <main class="flex-1 max-h-full overflow-hidden overflow-y-scroll container">
                    {{ $slot }}
                </main>
            </div>
        </div>
        <script>
            const setup = () => {
                return {
                    // navigation state
                    isOpen: false,
                    toggleOpen() {
                        this.isOpen = !this.isOpen;
                    },

                    // sidebar state
                    isSidebarOpen: false,
                    toggleSidebar() {
                        this.isSidebarOpen = !this.isSidebarOpen;
                    },

                    // settings dropdown state
                    isSettingOpen: false,
                    toggleSettings(){
                        this.isSettingOpen = !this.isSettingOpen;
                    },
                };
            };
        </script>
    </body>
</html>
