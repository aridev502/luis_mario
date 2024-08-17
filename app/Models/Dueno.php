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
        'aux1',
        'aux2',
        'aux3',
    ];
}
