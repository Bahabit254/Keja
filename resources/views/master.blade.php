<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keja App</title>
        <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
           @include('header')
            @yield('content')
            {{ View::make('footer') }}
        </div>
        
        <script src="{{ asset('frontend/js/jquery-3.7.0.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap5.js') }}"></script>
    </body>
</html>
