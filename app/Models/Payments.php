<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservations;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'amount',
        'payment_date',
        'payment_method',
        'payment_status',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservations::class);
    }
}
