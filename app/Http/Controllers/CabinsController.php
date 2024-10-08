<?php

namespace App\Http\Controllers;

use App\Models\Cabins; // Asegúrate de importar el modelo

class CabinsController extends Controller
{
    // Muestra todas las cabañas disponibles
    public function index()
    {
        // Obtiene todas las cabañas sin ningún filtro
        $cabins = Cabins::all(); // Elimina el filtro por 'is_available'
        return view('cabins.index', compact('cabins'));
    }

    public function show($id)
    {
        $cabin = Cabins::findOrFail($id); // Busca la cabaña por ID
        return view('cabins.show', compact('cabin')); // Pasa la cabaña a la vista
    }
}
