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
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/circles.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>


        <div class="font-sans text-gray-900 antialiased">
            <div class='box'>
                <div class='box1'></div>
            </div>

            <div class='box3'>
                <div class='box4'></div>
            </div>
            {{ $slot }}
        </div>
    </body>
</html>
