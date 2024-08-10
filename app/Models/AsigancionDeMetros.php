<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigancionDeMetros extends Model
{
    use HasFactory;

    protected $fillable = [
        'minimo',
        'maximo',
        'precio',
    ];
}
