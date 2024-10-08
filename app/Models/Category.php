<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Image;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'slug',         // Para URL amigables
        'description',  // Descripción de la categoría
        'parent_id',
    ];

    // Relación con los posts
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    // Relación polimórfica con las imágenes
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    // Otras funciones que puedas necesitar
    public function getRouteKeyName()
    {
        return 'slug'; // Esto permitirá usar el slug en lugar del ID en las rutas
    }

    // Método para obtener la jerarquía de categorías
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
