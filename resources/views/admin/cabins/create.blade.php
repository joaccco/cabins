<x-admin-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Agregar Nueva Cabaña</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.store-cabin') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre:</label>
                <input type="text" id="name" name="name" class="w-full p-2 rounded border" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Descripción:</label>
                <textarea id="description" name="description" class="w-full p-2 rounded border"></textarea>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700">Ubicación:</label>
                <input type="text" id="location" name="location" class="w-full p-2 rounded border" required>
            </div>
            <div class="mb-4">
                <label for="capacity" class="block text-gray-700">Capacidad:</label>
                <input type="number" id="capacity" name="capacity" class="w-full p-2 rounded border" min="1" required>
            </div>
            <div class="mb-4">
                <label for="price_per_night" class="block text-gray-700">Precio por Noche:</label>
                <input type="number" id="price_per_night" name="price_per_night" class="w-full p-2 rounded border" min="0" step="0.01" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Agregar Cabaña</button>
        </form>
    </div>
</x-admin-layout>
