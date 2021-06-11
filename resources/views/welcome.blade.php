<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @livewireStyles
    </head>
    <body >

    <livewire:lista-usuarios></livewire:lista-usuarios>
    @livewireScripts

    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
