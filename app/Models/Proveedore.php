<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;

    /*TODO: Relación con la entidad persona */
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    /*TODO: Relación 1 a muchos con la entidad compras */
    public function compras(){
        return $this->hasMany(Compra::class);
    }
}
