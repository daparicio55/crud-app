<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Lista de Ventas</h1>
    <a class="btn btn-primary" href="{{ asset('/ventas/create') }}">
        Registrar Nuevo
    </a>
    <table class="table">
        <thead>
           <th>ID</th>
           <th>Numero</th>
           <th>Fecha</th>
        </thead>
        <tbody>
           @foreach ($ventas as $venta)
               <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->numero }}</td>
                <td>{{ $venta->fecha }}</td>
               </tr>
           @endforeach
        </tbody>
    </table>
    </div>
    
</body>
</html>