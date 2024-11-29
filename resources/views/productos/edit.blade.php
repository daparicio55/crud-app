@extends('layouts.main')
@section('section_title', 'Registrar Producto')
@section('content')
    <h1>Editar un Producto</h1>
    <form action="{{ asset('/productos/' . $producto->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input value="{{ $producto->nombre }}" class="form-control" type="text" name="nombre">
            <label for="">Codigo</label>
            <input value="{{ $producto->codigo }}" class="form-control" type="text" name="codigo">
            <label for="">Precio</label>
            <input value="{{ $producto->precio }}" class="form-control" type="text" name="precio">
            <button class="btn btn-primary mt-3" type="submit">
                Guardar
            </button>
        </div>
    </form>
@endsection
