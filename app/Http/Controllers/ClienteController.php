<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('productos.index');
    }
    public function create(){
        return view('productos.create');
    }
    public function store(){

    }
}
