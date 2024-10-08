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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Relación con posts
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación con usuarios
            $table->text('content'); // Contenido del comentario
            $table->unsignedBigInteger('parent_id')->nullable()->index(); // Comentarios anidados
            $table->boolean('is_active')->default(true); // Campo para activar/desactivar el comentario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
