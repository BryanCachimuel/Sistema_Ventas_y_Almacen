<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    /*TODO: Relación con el Modelo Persona en este caso se aplica una relación a la inversa*/
    public function documento(){
        return $this->belongsTo(Documento::class);
    }

    /*TODO: Relación con la entidad proveedores */
    public function proveedore(){
        return $this->hasOne(Proveedore::class);
    }

    /*TODO: Relación con la entidad cliente */
    public function cliente(){
        return $this->hasOne(Cliente::class);
    }
}
