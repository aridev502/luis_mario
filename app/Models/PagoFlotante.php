<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoFlotante extends Model
{
    use HasFactory;

    public $guarded = ['id'];


    public function dueno()
    {
        return $this->belongsTo(Dueno::class);
    }
}
