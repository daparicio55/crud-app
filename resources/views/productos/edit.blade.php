<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos Editar</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Editar un Producto</h1>
    <form action="{{ asset('/productos/'.$producto->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
        <input value="{{ $producto->nombre }}" class="form-control" type="text" name="nombre">
        <label for="">Codigo</label>
        <input value="{{ $producto->codigo }}"  class="form-control" type="text" name="codigo">
        <label for="">Precio</label>
        <input value="{{ $producto->precio }}" class="form-control" type="text" name="precio">
        <button class="btn btn-primary mt-3" type="submit">
            Guardar
        </button>
        </div>
    </form>
    </div>
</body>
</html>