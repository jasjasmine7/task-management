<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Login' }}</title>
        @livewireStyles
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body class="">
        <div class="h-auto min-h-screen bg-no-repeat bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')">
            {{ $slot }}
        </div>

        @livewireScriptConfig


    </body>
</html>
