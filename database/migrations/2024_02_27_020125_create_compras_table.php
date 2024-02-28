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
     * decimal('impuesto',8,2)->unsigned() -> unsigend hace referencia a no ingresar números negativos
     * $table->foreignId('comprobante_id')->nullable()->constrained('comprobantes')->onDelete('set null'); -> onDelete('set null') determina que aunque se elimine un comprobante esta compra se quedara como registro pero de forma nula
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora');
            $table->decimal('impuesto',8,2)->unsigned();
            $table->string('numero_comprobante',255);
            $table->decimal('total',8,2)->unsigned();
            $table->tinyInteger('estado')->default(1);
            $table->foreignId('comprobante_id')->nullable()->constrained('comprobantes')->onDelete('set null');
            $table->foreignId('proveedore_id')->nullable()->constrained('proveedores')->onDelete('set null');
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
        Schema::dropIfExists('compras');
    }
};
