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
            $table->string('Tipo', 900)->nullable();
            $table->string('SKU')->nullable();
            $table->string('Nombre')->nullable();
            $table->integer('Publicado')->nullable();
            $table->string('Visibilidadenelcatalogo')->nullable();
            $table->string('Descripcioncorta')->nullable();
            $table->text('Descripcion')->nullable(); // Cambié esto a `text`
            $table->integer('Inventario')->nullable();
            $table->decimal('Pesokg', 10, 2)->nullable();
            $table->decimal('Longitudcm', 10, 2)->nullable();
            $table->decimal('Anchocm', 10, 2)->nullable();
            $table->decimal('Alturacm', 10, 2)->nullable();
            $table->decimal('Precionormal', 10, 2)->nullable();
            $table->string('Categorias')->nullable();
            $table->string('Etiquetas', 900)->nullable();
            $table->string('Imagenes', 900)->nullable();
            $table->integer('Posición')->nullable();
            $table->string('Color')->nullable();
            $table->string('Fabricante')->nullable();
            $table->string('Coleccion')->nullable();
            $table->string('Formato')->nullable();
            $table->string('Estilo')->nullable();
            $table->string('Entrega')->nullable();
            $table->string('Areaderrollo')->nullable();
            $table->string('Ancho')->nullable();
            $table->string('Largo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papel_tapiz');
    }
};
