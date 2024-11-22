@extends('layouts.main')
@section('section_title', 'Registrar Venta')
@section('content')
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
            <div class="card mt-3">
                <div class="card-header bg-info">
                    <h5 class="h5">Productos</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <label for="">Seleccione Producto</label>
                            <select class="form-control" name="productos" id="productos">
                                <option value="0" disabled selected >Seleccione un producto</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">
                                        {{ $producto->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <label for="">Precio</label>
                            <input class="form-control" type="text" name="precio" id="precio">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <label for="">Cantidad</label>
                            <input class="form-control" type="text" name="cantidad" id="cantidad">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary">
                        Agregar Producto
                    </button>
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">
                Guardar
            </button>
        </div>
    </form>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let productos = @json($productos);
        let selectProductos = document.getElementById('productos');
        selectProductos.addEventListener('change',function(){
            let precio = 0;
            productos.forEach(producto => {
                if(producto.id == this.value){
                    precio = producto.precio;
                }
            });
            let inputPrecio = document.getElementById('precio');
            let inputCantidad = document.getElementById('cantidad');
            inputPrecio.value = precio;
            inputCantidad.value = 1;
        });

        //console.log(productos);
    });
    
</script>
