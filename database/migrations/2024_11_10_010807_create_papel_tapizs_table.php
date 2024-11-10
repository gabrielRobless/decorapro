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
        Schema::create('papel_tapiz', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo',900)->change()->nullable();
            $table->string('SKU')->nullable();
            $table->string('Nombre')->nullable();
            $table->integer('Publicado')->nullable();
            $table->integer('¿Está destacado?')->nullable();
            $table->string('Visibilidad en el catálogo')->nullable();
            $table->string('Descripción corta')->nullable();
            $table->text('Descripción',900)->change()->nullable();
            $table->date('Día en que empieza el precio rebajado')->nullable();
            $table->date('Día en que termina el precio rebajado')->nullable();
            $table->string('Estado del impuesto')->nullable();
            $table->string('Clase de impuesto')->nullable();
            $table->integer('¿En inventario?')->nullable();
            $table->integer('Inventario')->nullable();
            $table->integer('Cantidad de bajo inventario')->nullable();
            $table->integer('¿Permitir reservas de productos agotados?')->nullable();
            $table->integer('¿Vendido individualmente?')->nullable();
            $table->decimal('Peso (kg)',10, 2)->nullable();
            $table->integer('Longitud (cm)')->nullable();
            $table->integer('Ancho (cm)')->nullable();
            $table->integer('Altura (cm)')->nullable();
            $table->integer('¿Permitir valoraciones de clientes?')->nullable();
            $table->string('Nota de compra')->nullable();
            $table->decimal('Precio rebajado',10, 2)->nullable();
            $table->decimal('Precio normal',10, 2)->nullable();
            $table->string('Categorías')->nullable();
            $table->string('Etiquetas',900)->change()->nullable();
            $table->string('Clase de envío')->nullable();
            $table->string('Imágenes',900)->change()->nullable();
            $table->integer('Límite de descargas')->nullable();
            $table->integer('Posición')->nullable();
            $table->string('Nombre del atributo 1')->nullable();
            $table->string('Valor(es) del atributo 1')->nullable();
            $table->integer('Atributo visible 1')->nullable();
            $table->string('Nombre del atributo 2')->nullable();
            $table->string('Valor(es) del atributo 2')->nullable();
            $table->integer('Atributo visible 2')->nullable();
            $table->string('Nombre del atributo 3')->nullable();
            $table->string('Valor(es) del atributo 3')->nullable();
            $table->integer('Atributo visible 3')->nullable();
            $table->string('Nombre del atributo 4')->nullable();
            $table->string('Valor(es) del atributo 4')->nullable();
            $table->integer('Atributo visible 4')->nullable();
            $table->string('Nombre del atributo 5')->nullable();
            $table->string('Valor(es) del atributo 5')->nullable();
            $table->integer('Atributo visible 5')->nullable();
            $table->string('Nombre del atributo 6')->nullable();
            $table->string('Valor(es) del atributo 6')->nullable();
            $table->integer('Atributo visible 6')->nullable();
            $table->string('Nombre del atributo 7')->nullable();
            $table->string('Valor(es) del atributo 7')->nullable();
            $table->integer('Atributo visible 7')->nullable();
            $table->string('Nombre del atributo 8')->nullable();
            $table->string('Valor(es) del atributo 8')->nullable();
            $table->integer('Atributo visible 8')->nullable();
            $table->string('Nombre del atributo 9')->nullable();
            $table->string('Valor(es) del atributo 9')->nullable();
            $table->integer('Atributo visible 9')->nullable();
            $table->string('Nombre del atributo 10')->nullable();
            $table->string('Valor(es) del atributo 10')->nullable();
            $table->integer('Atributo visible 10')->nullable();






            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papel_tapizs');
    }
};
