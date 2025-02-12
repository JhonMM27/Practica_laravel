<?php

use App\Models\Habitacion;
use App\Models\Reserva;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/usuarios',
Route::get('/usuarios', function(){
    $usuario = Usuario::all();
    return $usuario;
});

Route::get('/reservas', function(){
    // $cliente = Reserva::with('cliente')->get();
    $cliente = Reserva::with('habitacion')->get();
    return $cliente;
});

Route::get('/habitaciones', function(){
    $habitacion = Habitacion::with('tipo_habi')->get();
    return $habitacion;
});