<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table = 'tipos_habitaciones';
    protected $primaryKey = 'id';


    protected $fillable = ['nombre', 'descripcion', 'precio_noche'];

}
