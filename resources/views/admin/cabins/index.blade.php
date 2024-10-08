<x-admin-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Lista de Cabañas</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Descripción</th>
                    <th class="py-2 px-4 border-b">Ubicación</th>
                    <th class="py-2 px-4 border-b">Capacidad</th>
                    <th class="py-2 px-4 border-b">Precio por Noche</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cabins as $cabin)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $cabin->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $cabin->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $cabin->description }}</td>
                        <td class="py-2 px-4 border-b">{{ $cabin->location }}</td>
                        <td class="py-2 px-4 border-b">{{ $cabin->capacity }}</td>
                        <td class="py-2 px-4 border-b">${{ number_format($cabin->price_per_night, 2) }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="#" class="text-blue-600 hover:underline">Editar</a>
                            <a href="#" class="text-red-600 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
