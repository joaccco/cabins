<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabins;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cabin_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cabin()
    {
        return $this->belongsTo(Cabins::class);
    }
}
