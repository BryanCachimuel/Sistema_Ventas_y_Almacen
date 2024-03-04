<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacione extends Model
{
    use HasFactory;

    /*TODO: Relación muchos a muchos con la entidad Producto */
    public function productos(){
        return $this->belongsToMany(Producto::class);
    }

    /*TODO: Relación inversa con la entidad caracteristica */
    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }

    /*TODO:  se hace referencia al atributo de caracteristica_id */
    protected $fillable = ['caracteristica_id '];
}
