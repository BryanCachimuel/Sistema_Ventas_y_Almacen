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
     * TODO: función up para crear la tabla y sus atributos
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento',30);
            $table->string('numero_documento',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * TODO: función down para revertir la migración de la tabla creada
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
};
