<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->date('fecha_venta');
            $table->text('descrip_venta');
            $table->integer('venta_total');
            $table->integer('cantidad_total');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->timestamps();

            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
