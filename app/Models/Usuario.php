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
    protected $hidden = ['contraseña'];
}
