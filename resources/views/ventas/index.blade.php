@extends('layouts.main')
@section('section_title', 'Lista de Ventas')
@section('content')
    <h1>Lista de Ventas</h1>
    <a class="btn btn-primary" href="{{ asset('/ventas/create') }}">
        Registrar Nuevo
    </a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Numero</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>DNI</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->numero }}</td>
                    <td>{{ $venta->fecha }}</td>
                    <td>{{ $venta->cliente->apellidos }},
                        {{ $venta->cliente->nombres }}</td>
                    <td>{{ $venta->cliente->dni }}</td>
                    <td>
                        <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-success">Editar</a>
                        <a href="" class="btn btn-info">Mostrar Detalles</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
