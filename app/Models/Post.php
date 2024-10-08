<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;


class Post extends Model
{
     use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
        'is_published',
    ];

    // Relación con la categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relación polimórfica con las imágenes
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
