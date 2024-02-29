<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    /*TODO: Relación 1 a muchos con la entidad productos */
    public function productos(){
        return $this->hasMany(Producto::class);
    }

     /*TODO: Relación inversa con la entidad caracteristica */
     public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }
}
