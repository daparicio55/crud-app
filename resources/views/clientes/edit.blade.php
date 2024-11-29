@extends('layouts.main')
@section('section_title', 'Registrar Clente')
@section('content')
    <h1>Actualizar Cliente</h1>
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
@endsection
