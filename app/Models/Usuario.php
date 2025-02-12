<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //este de aca no es necesario
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    //esto si
    protected $fillable = ['nombre', 'email', 'contraseña', 'telefono', 'rol'];
    //hideen se usa pora ocultar el dato cuando se extraiga en forma de array o otros
    protected $hidden = ['contraseña'];
}
