<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;

    /*TODO: Relación uno a uno con la entidad Categoria*/
    public function categoria(){
        return $this->hasOne(Categoria::class);
    }

    /*TODO: Relación uno a uno con la entidad Marca*/
    public function marca(){
        return $this->hasOne(Marca::class);
    }

    /*TODO: Relación uno a uno con la entidad Presentacione*/
    public function presentacione(){
        return $this->hasOne(Presentacione::class);
    }
}
