<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2025</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-b from-black to-blue-950 text-white">
    @include('layouts.navbar')

    <main class="px-6 py-10">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
