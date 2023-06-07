<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav >
        <ul>
            <li><a class="active" href="{{ route('inicio') }}">Inicio</a></li>

            <li><a href="{{ route('contactenos') }}">Contáctenos</a></li>
            <li class="right"><a href="#">Registrarse</a></li>
            <li class="right"><a href="">Iniciar Sesión</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
