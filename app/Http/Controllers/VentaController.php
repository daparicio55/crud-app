<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VentaController extends Controller
{
    //
    public function index(){
        $ventas = Venta::get();
        //return $ventas;
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
    public function edit($id){
        $venta = Venta::find($id);
        $clientes = Cliente::get();
        return view('ventas.edit',compact('venta','clientes'));
    }
    public function update(Request $request,$id){
        $venta = Venta::find($id);
        $venta->fecha = $request->fecha;
        $venta->numero = $request->numero;
        $venta->cliente_id = $request->cliente_id;
        $venta->update();
        return Redirect::route('ventas.index');
    }
}
