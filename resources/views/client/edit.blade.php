@extends('layout.default')

@section('title')
    Nuevo Cliente
@endsection

@section('content')
<form action="{{ route('client.update'/* ,  $data['id'] */) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data['id'] }}">
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="name">Nombre Completo</label>
        <input type="text" id="name" name="name" class="w-60 p-1" value="{{ $data['name'] }}">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="email">Email</label>
        <input type="email" id="email" name="email" class="w-60 p-1" value="{{ $data['email'] }}">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="w-60 p-1" value="{{ $data['password'] }}">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="address">Dirección</label>
        <input type="text" id="address" name="address" class="w-60 p-1" value="{{ $data['address'] }}">
    </div>
    <div class="w-30 d-flex justify-between mb-1">
        <label class="fs-5" for="phone">Teléfono</label>
        <input type="text" id="phone" name="phone" class="w-60 p-1" value="{{ $data['phone'] }}">
    </div>
    <input type="submit" value="Guardar Cambios" class="p-1 fs-5 cursor-pointer">
</form>
@endsection



