<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('/productos',[ProductoController::class,'index']);
Route::get('/productos/create',[ProductoController::class,'create']);
Route::post('/productos',[ProductoController::class,'store']);
Route::get('/productos/{producto}/edit',[ProductoController::class,'edit']);
Route::put('/productos/{producto}',[ProductoController::class,'update']);
Route::delete('/productos/{producto}',[ProductoController::class,'destroy']);






Route::get('/clientes',[ClienteController::class,'index']);
Route::get('/clientes/create',[ClienteController::class,'create']);
Route::post('/clientes',[ClienteController::class,'store']);
Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit']);
Route::put('/clientes/{cliente}',[ClienteController::class,'update']);

Route::get('/ventas',[VentaController::class,'index']);
Route::get('/ventas/create',[VentaController::class,'create']);
Route::post('/ventas',[VentaController::class,'store']);
Route::get('/ventas/{venta}/edit',[VentaController::class,'edit']);
Route::put('/ventas/{venta}',[VentaController::class,'update']);
