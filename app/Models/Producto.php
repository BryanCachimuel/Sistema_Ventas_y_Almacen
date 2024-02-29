<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /*TODO: Relación muchos a muchos con la entidad Compra 
      withTimestamps() -> para crear valores de creat_at y update_at
      withPivot() -> columnas con las que cuenta la tabla pivote
    */
    public function compras(){
        return $this->belongsToMany(Compra::class)->withTimestamps()
            ->withPivot('cantidad','precio_compra','precio_venta');
    }

    /*TODO: Relación muchos a muchos con la entidad Venta */
    public function ventas(){
        return $this->belongsToMany(Venta::class)->withTimestamps()
            ->withPivot('cantidad','precio_venta','descuento');
    }

    /*TODO: Relación muchos a muchos con la entidad Categorias */
    public function categorias(){
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    /*TODO: Relación inversa con la entidad Marca */
    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    /*TODO: Relación inversa con la entidad Presentacione */
    public function presentacione(){
        return $this->belongsTo(Presentacione::class);
    }

}
