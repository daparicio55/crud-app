<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="container">
        <h1>Registrar Nueva Venta</h1>
        <form action="{{ asset('/ventas') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Seleccione Cliente</label>
                <select name="cliente_id" class="form-control">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">
                            {{ $cliente->nombres }}, {{ $cliente->apellidos }}
                        </option>
                    @endforeach
                </select>
                <label for="">Numero</label>
                <input type="numero" class="form-control" name="numero">
                <label for="">Fecha</label>
                <input type="date" name="fecha" class="form-control">
                <button class="btn btn-primary mt-3" type="submit">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>
</html>