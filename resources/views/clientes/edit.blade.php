<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="container">
        <h1>Actualizar Producto</h1>
        <form action='{{ asset("/clientes/$cliente->id") }}' method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">DNI</label>
                <input value="{{ $cliente->dni }}" type="text" class="form-control" name="dni">
                <label for="">Nombre</label>
                <input value="{{ $cliente->nombres }}" class="form-control" type="text" name="nombres">
                <label for="">Apellido</label>
                <input value="{{ $cliente->apellidos }}" type="text" class="form-control" name="apellidos">
                <label for="">Direccion</label>
                <input value="{{ $cliente->direccion }}" type="text" class="form-control" name="direccion">
                <label for="">Edad</label>
                <input value="{{ $cliente->edad }}" type="number" class="form-control" name="edad">
                <button class="btn btn-primary mt-3" type="submit">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>
</html>
