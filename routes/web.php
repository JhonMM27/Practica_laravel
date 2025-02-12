<?php

use App\Models\Reserva;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/usuarios',
Route::get('usuarios', function(){
    $categorias = Usuario::all();
    return $categorias;
});

Route::get('reservas', function(){
    // $producto = Producto::all();
    $producto = Reserva::with('cliente')->get();
    // $producto = Reserva::with('habitacion')->get();
    return $producto;
});