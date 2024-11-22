
@extends('layouts.main')
@section('section_title', 'Lista de Productos')
@section('content')
    <div class="container">
        <h1>Lista de Productitos</h1>
        <a class="btn btn-primary" href="{{ route('productos.create') }}">
            Registrar Nuevo
        </a>
        <table class="table">
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
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <a href="{{ asset('/productos/' . $producto->id . '/edit') }}" class="btn btn-success">
                                Editar
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-{{ $producto->id }}">
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