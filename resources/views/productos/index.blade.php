@extends('layouts.main')
@section('section_title', 'Lista de Productos')
@section('content')
    <div class="container">
        <h2 class="h2">Lista de Productos</h2>
        <a class="btn btn-primary" href="{{ route('productos.create') }}">
            Registrar Nuevo
        </a>
        <table class="table bg-transparent border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="bg-transparent">{{ $producto->id }}</td>
                        <td class="bg-transparent">{{ $producto->nombre }}</td>
                        <td class="bg-transparent">{{ $producto->codigo }}</td>
                        <td class="bg-transparent">{{ $producto->precio }}</td>
                        <td class="bg-transparent">
                            <a href="{{ asset('/productos/' . $producto->id . '/edit') }}" class="btn btn-success">
                                Editar
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $producto->id }}">
                                Eliminar
                            </button>
                            @include('productos.modal')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection