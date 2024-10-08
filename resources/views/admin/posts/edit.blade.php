<x-admin-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Editar Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Título</label>
                <input type="text" name="title" id="title" class="border border-gray-300 rounded p-2 w-full" value="{{ old('title', $post->title) }}" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Contenido</label>
                <textarea name="content" id="content" class="border border-gray-300 rounded p-2 w-full" rows="5" required>{{ old('content', $post->content) }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Post</button>
        </form>
    </div>
</x-admin-layout>
