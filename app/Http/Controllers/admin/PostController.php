<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post; // Asegúrate de importar el modelo Post
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class PostController extends Controller
{
    // Método para listar todos los posts
    public function index()
    {
        $posts = Post::all(); // Obtiene todos los posts de la base de datos
        return view('admin.posts.index', compact('posts')); // Retorna la vista con los posts
    }

    // Método para mostrar el formulario de creación de un nuevo post
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories')); // Retorna la vista para crear un nuevo post
    }

    // Método para almacenar un nuevo post
    // Método para almacenar un nuevo post
    public function store(Request $request)
    {
        // Validar la solicitud
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'required|boolean',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Generar un slug basado en el título
        $validatedData['slug'] = Str::slug($request->title);

        // Crear el nuevo post
        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post')); // Retorna la vista para editar un post
    }

    // Método para actualizar un post
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    // Método para eliminar un post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
