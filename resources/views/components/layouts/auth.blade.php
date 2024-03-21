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
        <div class="h-auto min-h-screen bg-no-repeat bg-cover brightness-50 "
        style="background-image:url('https://images.unsplash.com/photo-1449157291145-7efd050a4d0e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8https://images.unsplash.com/photo-1435575653489-b0873ec954e2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3DfGVufDB8fHx8fA%3D%3D')">
            {{ $slot }}
        </div>

        @livewireScriptConfig


    </body>
</html>
