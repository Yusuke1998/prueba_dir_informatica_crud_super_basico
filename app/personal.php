<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    protected $table = "personals";
   	protected $fillable = [
        'cedula', 'nombre', 'apellido', 'telefono','estatus', 'fecha_ingreso'
    ];
}
