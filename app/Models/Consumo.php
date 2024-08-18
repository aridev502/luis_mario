<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'dueno_id',
        'metros',
        'total',
        'fecha_de_pago',
    ];

    public function dueno()
    {
        return $this->belongsTo(Dueno::class);
    }
}
