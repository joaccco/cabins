<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservations;
use App\Models\Reviews;
use App\Models\CabinsStatus;
use App\Models\Discounts;

class Cabins extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'capacity',
        'price_per_night',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function status()
    {
        return $this->belongsTo(CabinsStatus::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discounts::class);
    }
}
