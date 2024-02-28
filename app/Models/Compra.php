<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    /*TODO: Relación con la tabla proveedore */
    public function proveedore(){
        return $this->belongsTo(Proveedore::class);
    }

    /*TODO: Relación con la entidad comprobante */
    public function comprobante(){
        return $this->belongsTo(Comprobante::class);
    }

    /*TODO: Relación de muchos a muchos con la entidad Producto 
      withTimestamps() -> para crear valores de creat_at y update_at
      withPivot() -> columnas con las que cuenta la tabla pivote
    */
    public function producto(){
        return $this->belongsToMany(Producto::class)->withTimestamps()
               ->withPivot('cantidad','precio_compra','precio_venta');
    }
}
