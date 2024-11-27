@extends('layouts.main')
@section('section_title', 'Registrar Venta')
@section('content')
    <h1>Registrar Nueva Venta</h1>
    <form action="{{ asset('/ventas') }}" method="POST">
        @csrf
        <div class="form-group">
            @include('ventas.partials.datos')
            @include('ventas.partials.selectproductos')
            <div class="card">
                <div class="card-header bg-warning">
                    <h5 class="h5">Detalle de Venta</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Cant.</th>
                            <th>Descripcion</th>
                            <th>P. Unitario</th>
                            <th>Sub Total</th>
                            <th></th>
                        </thead>
                        <tbody id="table_body">

                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-secondary text-white text-right">
                    <h5 class="h5">TOTAL: S/<span id="txt_total"> 00.00</span></h5>
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
        let total_venta = 0;
        let productos = @json($productos);
        let selectProductos = document.getElementById('productos');
        /* evento que se dispara cuando se cambia el valor del select */
        selectProductos.addEventListener('change', function() {
            let precio = 0;
            productos.forEach(producto => {
                if (producto.id == this.value) {
                    precio = producto.precio;
                }
            });
            let inputPrecio = document.getElementById('precio');
            let inputCantidad = document.getElementById('cantidad');
            inputPrecio.value = precio;
            inputCantidad.value = 1;
        });
        let btnAgregar = document.getElementById('btn_agregar');
        btnAgregar.addEventListener('click', function() {
            if (selectProductos.value == 0) {
                alert('Seleccione un producto');
            } else {
                /* obteniendo datos */
                let cantidad = document.getElementById('cantidad').value;
                let precio = document.getElementById('precio').value;
                let descripcion = selectProductos.options[selectProductos.selectedIndex].text;
                let subtotal = cantidad * precio;
                agregarFila(cantidad, descripcion, precio, subtotal);
                total_venta = total_venta + subtotal;
            }
            document.getElementById('txt_total').innerHTML = total_venta;
        });
        function agregarFila(cantidad, descripcion, precio, subtotal) {
            /* agergar datos a la tabla detalle */
            let tableBody = document.getElementById('table_body');
            let fila = document.createElement('tr');
            fila.id = 'fila' + selectProductos.value;
            let col_cantidad = document.createElement('td');
            let col_descripcion = document.createElement('td');
            let col_punitario = document.createElement('td');
            let col_subtotal = document.createElement('td');
            let col_button = document.createElement('td');
            let button = document.createElement('button');
            button.innerHTML = 'Borrar';
            button.type = 'button';
            button.classList.add('btn', 'btn-danger');
            button.setAttribute('onclick', `borrarfila(${selectProductos.value})`);
            col_button.appendChild(button);
            col_cantidad.innerHTML = cantidad;
            col_descripcion.innerHTML = descripcion;
            col_punitario.innerHTML = precio;
            col_subtotal.innerHTML = subtotal;
            fila.appendChild(col_cantidad);
            fila.appendChild(col_descripcion);
            fila.appendChild(col_punitario);
            fila.appendChild(col_subtotal);
            fila.appendChild(col_button);
            tableBody.appendChild(fila);
        }
    });
    function borrarfila(id) {
        let fila = document.getElementById('fila' + id);
        fila.remove();
    }
</script>
