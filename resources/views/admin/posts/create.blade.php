<x-admin-layout>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Crear Nuevo Post</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Título</label>
            <input type="text" name="title" id="title" class="w-full border rounded-lg p-2" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold">Contenido</label>
            <textarea name="content" id="content" class="w-full border rounded-lg p-2" rows="5" required></textarea>
        </div>
        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-semibold">Categoría</label>
            <select name="category_id" id="category_id" class="w-full border rounded-lg p-2" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="is_active" class="block text-gray-700 font-semibold">¿Está activo?</label>
            <select name="is_active" id="is_active" class="w-full border rounded-lg p-2">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Crear Post</button>
    </form>
</div>
</x-admin-layout>
