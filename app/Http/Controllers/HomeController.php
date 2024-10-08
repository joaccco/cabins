<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Cabins;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todas las cabañas
        $cabins = Cabins::all();

        // Pasar las cabañas a la vista
        return view('home.index', compact('cabins'));
    }

    public function storeReservation(Request $request)
    {
        // Validar los datos recibidos del formulario
        $request->validate([
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'cabin_id' => 'required|exists:cabins,id', // Verificar que la cabaña seleccionada existe
        ]);

        // Crear la reserva
        $reservation = Reservations::create([
            'user_id' => Auth::id(),
            'cabin_id' => $request->cabin_id,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'total_price' => $this->calculateTotalPrice($request->check_in_date, $request->check_out_date, $request->cabin_id),
            'status' => 'pending', // Estado inicial de la reserva
        ]);

        return redirect()->back()->with('success', 'Reserva realizada exitosamente.');
    }

    private function calculateTotalPrice($checkInDate, $checkOutDate, $cabinId)
    {
        $cabin = Cabins::find($cabinId);
        $days = (new \DateTime($checkInDate))->diff(new \DateTime($checkOutDate))->days;
        return $cabin->price_per_night * $days;
    }
}
