<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabins;

class CabinsStatus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cabins()
    {
        return $this->hasMany(Cabins::class);
    }
}
