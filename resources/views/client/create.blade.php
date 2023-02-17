@extends('layout.default')

@section('title')
    Nuevo Cliente
@endsection

@section('content')
<form action="{{ route('client.create') }}" method="POST">
    @csrf
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="name">Nombre Completo</label>
        <input type="text" id="name" name="name" class="w-60 p-1">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="email">Email</label>
        <input type="email" id="email" name="email" class="w-60 p-1">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="w-60 p-1">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="address">Dirección</label>
        <input type="text" id="address" name="address" class="w-60 p-1">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="phone">Teléfono</label>
        <input type="text" id="phone" name="phone" class="w-60 p-1">
    </div>
    <input type="submit" value="Crear CLiente" class="p-1 fs-5 cursor-pointer">
</form>
@endsection



