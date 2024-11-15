<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Registrar Nuevo Producto</h1>
    <form action="{{ asset('/productos') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
        <input  class="form-control" type="text" name="nombre">
        <label for="">Codigo</label>
        <input  class="form-control" type="text" name="codigo">
        <label for="">Precio</label>
        <input  class="form-control" type="text" name="precio">
        <button class="btn btn-primary mt-3" type="submit">
            Guardar
        </button>
        </div>
    </form>
    </div>
</body>
</html>