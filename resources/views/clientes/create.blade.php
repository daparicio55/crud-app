@extends('layouts.main')
@section('section_title', 'Registrar Clente')
@section('content')
    <h1>Registrar Nuevo Cliente</h1>
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
@endsection
