<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * TODO: la clave foranea se escribe de lasiguiente manera $table->foreignId('persona_id')->unique()->constrained('personas')->onDelete('cascade')
     * unique() -> como la relación es de 1 a 1 implica que una persona solo es un proveedor y un proveedor es una sola persona 
     * onDelete('cascade') -> permite que en caso de que una persona sea eliminada aquí en proveedores tambien se elimina el registro con 
     * el id que sea eliminado en la tabla personas
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->unique()->constrained('personas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
