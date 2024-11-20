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
        <h1>Editar Venta</h1>
        <form action="{{ route('ventas.update',$venta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Seleccione Cliente</label>
                <select name="cliente_id" class="form-control">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}"
                            @if($cliente->id == $venta->cliente_id) selected @endif>
                            {{ $cliente->nombres }}, {{ $cliente->apellidos }}
                        </option>
                    @endforeach
                </select>
                <label for="">Numero</label>
                <input type="numero" value="{{ $venta->numero }}" class="form-control" name="numero">
                <label for="">Fecha</label>
                <input type="date" value="{{ $venta->fecha }}" name="fecha" class="form-control">
                <button class="btn btn-primary mt-3" type="submit">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>
</html>