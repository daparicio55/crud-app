<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/productos',[ProductoController::class,'index']);
Route::get('/productos/create',[ProductoController::class,'create']);
Route::post('/productos',[ProductoController::class,'store']);
Route::get('/productos/{producto}/edit',[ProductoController::class,'edit']);
Route::put('/productos/{producto}',[ProductoController::class,'update']);








Route::get('/clientes',[ClienteController::class,'index']);
Route::get('/clientes/create',[ClienteController::class,'create']);
Route::post('/clientes',[ClienteController::class,'store']);