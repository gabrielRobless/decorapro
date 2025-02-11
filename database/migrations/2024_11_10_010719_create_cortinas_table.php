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
        Schema::create('cortinas', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo',900)->nullable();
            $table->string('SKU')->nullable();
            $table->string('Nombre')->nullable();
            $table->integer('Publicado')->nullable();
            $table->string('Visibilidadenelcatalogo')->nullable();
            $table->string('Descripcioncorta')->nullable();
            $table->text('Descripcion',900)->nullable();
            $table->integer('Inventario')->nullable();
            $table->decimal('Pesokg',10, 2)->nullable();
            $table->integer('Longitudcm')->nullable();
            $table->integer('Anchocm')->nullable();
            $table->integer('Alturacm')->nullable();
            $table->decimal('Precionormal',10, 2)->nullable();
            $table->string('Categorias')->nullable();
            $table->string('Etiquetas',900)->nullable();
            $table->string('Imagenes',900)->nullable();
            $table->integer('Posición')->nullable();
            $table->string('Color')->nullable();
            $table->string('Marca')->nullable();
            $table->string('TiempoEntrega')->nullable();
            $table->string('Tipo2')->nullable();
            $table->string('Tela')->nullable();
            $table->string('ProteccionUV')->nullable();
            $table->string('Composicion')->nullable();
            $table->string('Peso')->nullable();
            $table->string('Grosor')->nullable();







            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cortinas');
    }
};
