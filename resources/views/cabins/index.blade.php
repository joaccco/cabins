<x-app-layout>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Cabañas Disponibles</h1>

    @if($cabins->isEmpty())
        <p>No hay cabañas disponibles en este momento.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($cabins as $cabin)
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold">{{ $cabin->name }}</h2>
                    <p class="text-gray-700">{{ $cabin->description }}</p>
                    <p><strong>Ubicación:</strong> {{ $cabin->location }}</p>
                    <p><strong>Capacidad:</strong> {{ $cabin->capacity }} personas</p>
                    <p><strong>Precio por Noche:</strong> ${{ number_format($cabin->price_per_night, 2) }}</p>
                    <a href="{{ route('cabins.show', $cabin->id) }}" class="mt-2 inline-block bg-blue-600 text-white py-2 px-4 rounded">Ver Detalles</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
</x-app-layout>
