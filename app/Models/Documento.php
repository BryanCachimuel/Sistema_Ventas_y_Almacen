<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    /*TODO: para relacionar dos tablas con cardinalidad 1 a 1 en esta caso con el Modelo Persona*/
    public function persona(){
        return $this->hasOne(Persona::class);
    }
}
