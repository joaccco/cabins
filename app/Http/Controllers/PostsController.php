<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Post::where('is_active', true);

        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        $posts = $query->get();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function show($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);

        $recommendedPosts = Post::where('is_active', true)
            ->where('id', '!=', $post->id)
            ->inRandomOrder()
            ->take(4)
            ->get();
        return view('posts.show', compact('post', 'recommendedPosts'));
    }
}
