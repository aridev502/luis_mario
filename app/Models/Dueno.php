<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'estado',
        'dpi',
        'ubicacion',
        'tipo',
        'asignado',
        'abonado',
        'aux3',
    ];
}
