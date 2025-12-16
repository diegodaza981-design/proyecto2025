<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Proyecto 2025')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col text-white bg-gradient-to-br from-black via-slate-900 to-blue-900">
    @include('layouts.navbar')

    <main class="flex-1">
        <div class="max-w-5xl mx-auto px-4 py-10">
            @yield('contenido')
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
