<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabins; // Asegúrate de importar el modelo
use Illuminate\Support\Facades\Validator;

class CabinsController extends Controller
{
     // Muestra todas las cabañas
     public function index()
     {
         $cabins = Cabins::all(); // Obtiene todas las cabañas
         return view('admin.cabins.index', compact('cabins')); // Pasa las cabañas a la vista
     }

    // Muestra el formulario para crear una nueva cabaña
    public function create()
    {
        return view('admin.create-cabin'); // Crea esta vista en el siguiente paso
    }

    // Almacena una nueva cabaña
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'price_per_night' => 'required|numeric|min:0',
        ]);

        // Crear la cabaña
        Cabins::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'capacity' => $request->capacity,
            'price_per_night' => $request->price_per_night,
        ]);

        return redirect()->route('admin.create-cabin')->with('success', 'Cabaña creada exitosamente.');
    }
}
