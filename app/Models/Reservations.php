<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cabins;
use App\Models\Payments;
use App\Models\ReservationDiscounts;
use App\Models\ReservationStatuses;
use App\Models\Discounts;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cabin_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cabin()
    {
        return $this->belongsTo(Cabins::class);
    }

    public function payments()
    {
        return $this->hasMany(Payments::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discounts::class, 'reservation_discounts')->withPivot('applied_amount');
    }
}
