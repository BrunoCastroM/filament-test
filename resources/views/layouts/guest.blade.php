<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <!-- Header com logo e links -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <div>
                <a href="#">
                    <img src="{{ asset('images/laravel-logo.svg') }}" alt="Logo" class="h-8">
                </a>
            </div>
            <div>
                <a href="{{ route('filament.app.auth.login') }}" class="text-gray-700 hover:text-gray-900 mx-2">Login</a>
                <a href="{{ route('filament.app.auth.register') }}" class="text-gray-700 hover:text-gray-900 mx-2">Register</a>
            </div>
        </div>
    </header>
    <!-- Conteúdo Principal -->
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
</body>
</html>
