@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold">{{ $cabin->name }}</h1>
    <p class="text-gray-700">{{ $cabin->description }}</p>
    <p><strong>Ubicación:</strong> {{ $cabin->location }}</p>
    <p><strong>Capacidad:</strong> {{ $cabin->capacity }} personas</p>
    <p><strong>Precio por Noche:</strong> ${{ number_format($cabin->price_per_night, 2) }}</p>
    <a href="{{ route('cabins.index') }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Volver a la lista</a>
</div>
@endsection
