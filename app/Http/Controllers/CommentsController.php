<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        // Asegúrate de que el usuario esté autenticado
        if (!Auth::check()) {
            return redirect()->back()->withErrors('Debes estar logueado para comentar.');
        }

        // Validar la solicitud
        $request->validate([
            'content' => 'required|string|max:500',
            'post_id' => 'required|exists:posts,id',
        ]);

        // Crear el comentario
        Comment::create([
            'content' => $request->content,
            'post_id' => $request->post_id,
            'user_id' => Auth::id(), // Obtén el ID del usuario autenticado
        ]);

        return redirect()->back()->with('success', 'Comentario añadido con éxito.');
    }
}
