<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    //
    public function index(){
        $ventas = Venta::get();
        return view('ventas.index',compact('ventas'));
    }
    public function create(){
        $clientes = Cliente::get();
        return view('ventas.create',compact('clientes'));
    }
    public function store(Request $request){
        $venta = new Venta();
        $venta->numero = $request->numero;
        $venta->fecha = $request->fecha;
        $venta->cliente_id = $request->cliente_id;
        $venta->save();
        return redirect('/ventas');
    }
    public function edit(){

    }
    public function update(){

    }
}
