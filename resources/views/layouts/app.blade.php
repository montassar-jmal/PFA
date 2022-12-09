<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('img/favicon-16x16.png') }}" />
        <!-- Fonts -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            
            
            <!-- Page Content -->
            <main>
                
                {{ $slot }}
            </main>
        </div>
        <script src="{{ asset('js/Chart.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/chart-area.js') }}"></script>
        <script src="{{ asset('js/all.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bundle.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/chart-bar.js') }}"></script>
        <script src="{{ asset('js/datatables2.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
    </body>
</html>
