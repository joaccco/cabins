<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationDiscounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'discount_id',
        'applied_amount',
    ];
}
