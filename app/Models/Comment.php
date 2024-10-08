<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'post_id',      // ID del post al que pertenece el comentario
        'user_id',      // ID del usuario que hizo el comentario
        'content',      // Contenido del comentario
        'parent_id',    // ID del comentario padre, para comentarios anidados
        'is_active',    // Para activar/desactivar el comentario
    ];

    // Relación con el modelo Post
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    // Relación con el modelo User (asumiendo que tienes un modelo User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación para comentarios anidados
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
