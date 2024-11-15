<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Lista de Clientes</h1>
    <a class="btn btn-primary" href="{{ asset('/clientes/create') }}">
        Registrar Nuevo
    </a>
    <table class="table">
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
            @foreach ($clientes as $cliente )
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->dni }}</td>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->edad }}</td>
                    <td>
                        <a href="{{ asset('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-success">
                            Editar
                        </a>
                        <a href="" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</body>
</html>