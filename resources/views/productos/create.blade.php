@extends('layouts.main')
@section('section_title', 'Registrar Producto')
@section('content')
    <h1>Registrar Nuevo Producto</h1>
    <form action="{{ asset('/productos') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
            <label for="">Codigo</label>
            <input class="form-control" type="text" name="codigo">
            <label for="">Precio</label>
            <input class="form-control" type="text" name="precio">
            <button class="btn btn-primary mt-3" type="submit">
                Guardar
            </button>
        </div>
    </form>
@endsection
