<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>
        @yield('title', 'Titulo por defecto')
    </title>
</head>

<body>
    <header>
        @include('_partials.nav')
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('_partials.footer')
</body>

</html>