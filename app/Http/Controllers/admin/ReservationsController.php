<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function recentReservations()
    {
        // Obtener las 5 reservas más recientes
        $reservations = Reservations::orderBy('created_at', 'desc')->take(5)->get();

        // Pasar las reservas a la vista
        return view('admin.reservations.index', compact('reservations'));
    }
}
