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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // ID de la publicación
            $table->string('title'); // Título de la publicación
            $table->text('content'); // Contenido de la publicación
            $table->string('slug')->unique(); // Slug para SEO y URL amigable
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Relación con la categoría
            $table->string('featured_image')->nullable(); // Imagen destacada
            $table->boolean('is_active')->default(true); // Añade esta línea // Estado de publicación
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
