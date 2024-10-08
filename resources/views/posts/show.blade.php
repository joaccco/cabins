<x-app-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-2 text-gray-800">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-6">{{ $post->created_at->format('d M, Y') }}</p>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <div class="content">
                <p class="text-lg text-gray-700 leading-relaxed">{{ $post->content }}</p>
            </div>
        </div>

        <a href="{{ route('posts.index') }}"
            class="inline-block bg-blue-500 text-white py-3 px-6 rounded-full shadow hover:bg-blue-600 transition duration-200">Volver
            a la lista de posts</a>

        <!-- Sección de Posts Recomendados -->
        <h2 class="text-2xl font-bold mt-10 mb-4 text-gray-800">Posts Recomendados</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($recommendedPosts as $recommendedPost)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-semibold">{{ $recommendedPost->title }}</h3>
                    <p class="mt-2">{{ Str::limit($recommendedPost->content, 80) }}</p>
                    <a href="{{ route('posts.show', $recommendedPost->id) }}"
                        class="text-blue-500 hover:underline mt-2 inline-block">Leer más</a>
                </div>
            @endforeach
        </div>
        <!-- Sección de Comentarios -->
        <h2 class="text-2xl font-bold mt-10 mb-4 text-gray-800">Comentarios</h2>
        <div class="bg-white shadow-md rounded-lg p-4 mt-6">
            @foreach ($post->comments as $comment)
                <div class="border-b mb-4 pb-2">
                    <p class="text-gray-700 font-semibold">{{ $comment->user->name }} dijo:</p>
                    <p class="text-gray-600">{{ $comment->content }}</p>
                    <p class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            @endforeach

            @if($post->comments->isEmpty())
                <p class="text-gray-500">No hay comentarios todavía.</p>
            @endif

            {{-- Formulario para agregar un nuevo comentario --}}
            @auth
                <h3 class="text-lg font-bold mt-4 mb-2">Deja un comentario</h3>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div>
                        <textarea name="content" class="w-full border rounded-lg p-2" rows="3" required placeholder="Escribe tu comentario..."></textarea>
                    </div>
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Enviar</button>
                </form>
            @else
                <p class="text-red-500">Debes estar logueado para dejar un comentario.</p>
            @endauth
        </div>


    </div>
</x-app-layout>
