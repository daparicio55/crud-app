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
        <h1>Registrar Nuevo Producto</h1>
        <form action="{{ asset('/clientes') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">DNI</label>
                <input type="text" class="form-control" name="dni">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="nombres">
                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellidos">
                <label for="">Direccion</label>
                <input type="text" class="form-control" name="direccion">
                <label for="">Edad</label>
                <input type="number" class="form-control" name="edad">
                <button class="btn btn-primary mt-3" type="submit">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>
</html>
