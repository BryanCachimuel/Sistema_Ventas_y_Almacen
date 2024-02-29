<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    /*TODO: Relación con la entidad cliente */
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    /*TODO: Relación inversa con la entidad User */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /*TODO: Relación inversa con la entidad comprobante */
    public function comprobante(){
        return $this->belongsTo(Comprobante::class);
    }

    /*TODO: Relación muchos a muchos con la entidad producto */
    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps()
            ->withPivot('cantidad','precio_venta','descuento');
    }
}
