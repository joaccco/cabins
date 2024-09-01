<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabins;
use App\Models\Reservations;

class Discounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'discount_type',
        'amount',
        'start_date',
        'end_date',
        'cabin_id',
    ];

    public function cabin()
    {
        return $this->belongsTo(Cabins::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservations::class, 'reservation_discounts')->withPivot('applied_amount');
    }
}
