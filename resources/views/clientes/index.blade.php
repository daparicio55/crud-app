@extends('layouts.main')
@section('section_title', 'Lista de Clientes')
@section('content')
    <div class="container">
        <h1>Lista de Clientes</h1>
        <a class="btn btn-primary" href="{{ asset('/clientes/create') }}">
            Registrar Nuevo
        </a>
        <table class="table bg-transparent">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Edad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->dni }}</td>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->edad }}</td>
                        <td>
                            <a href="{{ asset('/clientes/' . $cliente->id . '/edit') }}" class="btn btn-success">
                                Editar
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-{{ $cliente->id }}">
                                Eliminar
                            </button>
                            @include('clientes.modal')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
@endsection