<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revista Palermo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <a href="{{ route('index') }}" class="d-inline-block p-2 rounded-5 m-4 fs-5 bg-black text-white">Inicio</a>

    <a href="{{ route('client.index') }}" class="d-inline-block p-2 rounded-5 m-4 fs-5 bg-black text-white">Clientes</a>

    <a href="{{ route('client.create') }}" class="d-inline-block p-2 rounded-5 m-4 fs-5 bg-black text-white">Agregar Cliente</a>

    <h1 class="fs-3 mb-2">Revista Palermo - @yield('title')</h1>

    @yield('content')

</body>
</html>