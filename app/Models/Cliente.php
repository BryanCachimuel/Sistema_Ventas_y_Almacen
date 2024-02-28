<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /*TODO: Relación con la tabla persona */
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    /*TODO: Relación 1 a muchos con la entidad Venta */
    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
