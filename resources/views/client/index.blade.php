@extends('layout.default')

@section('title')
    Clientes
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th class="py-1 px-3 border fs-5">ID</th>
                <th class="py-1 px-3 border fs-5">Nombre</th>
                <th class="py-1 px-3 border fs-5">Email</th>
                <th class="py-1 px-3 border fs-5">Contraseña</th>
                <th class="py-1 px-3 border fs-5">Teléfono</th>
                <th class="py-1 px-3 border fs-5">Dirección</th>
                <th class="py-1 px-3 border fs-5">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $client)
                <tr>
                    <td class="py-1 px-3 border fs-5">{{ $client["id"]}} </td>
                    <td class="py-1 px-3 border fs-5">{{ $client["name"]}} </td>
                    <td class="py-1 px-3 border fs-5">{{ $client["email"]}} </td>
                    <td class="py-1 px-3 border fs-5">{{ $client["password"]}} </td>
                    <td class="py-1 px-3 border fs-5">{{ $client["phone"]}} </td>
                    <td class="py-1 px-3 border fs-5">{{ $client["address"]}} </td>
                    <td class="py-1 px-3 border fs-5">
                        <a href="{{ route('client.edit', $client["id"]) }}" class="d-inline-block p-2 rounded-5 fs-5 bg-blue-700 text-white">Editar</a>
                        <a href="{{ route('client.delete', $client["id"]) }}" class="d-inline-block p-2 rounded-5 fs-5 bg-blue-700 text-white">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



