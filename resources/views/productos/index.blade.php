<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        <a class="btn btn-primary" href="{{ asset('/productos/create') }}">
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

</body>

</html>
