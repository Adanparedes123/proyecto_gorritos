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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->date('fecha_adquirida');
            $table->text('talla');
            $table->text('descripcion');
            $table->text('marca');
            $table->text('modelo');
            $table->integer('cantidad_adquirida');
            $table->integer('cantidad_total');
            $table->string('img_derecha');
            $table->string('img_abajo');
            $table->string('img_arriba');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
