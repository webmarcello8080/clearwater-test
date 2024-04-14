<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @livewireStyles
        @vite('resources/css/app.css')
        @livewireScripts
        
        <title>Map</title>
    </head>
    <body>
        {{ $slot }}
    </body>
    @vite('resources/js/app.js')
</html>