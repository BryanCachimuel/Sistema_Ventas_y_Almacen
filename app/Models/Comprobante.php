<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    /*TODO: Relación 1 a muchos con la entidad compras */
    public function compras(){
        return $this->hasMany(Compra::class);
    }

    /*TODO: Relación de 1 a muchos con la entidad Venta */
    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
