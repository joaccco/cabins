<x-admin-layout class="bg-transparent">
    <div class="container mx-auto p-12">
        <h1 class="text-2xl font-semibold mb-4">Reservas Recientes</h1>

        @if($reservations->isEmpty())
            <p class="text-gray-500">No hay reservas recientes.</p>
        @else
            <table class="table-auto w-full bg-white rounded shadow">
                <thead>
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Cabaña</th>
                        <th class="px-4 py-2">Fecha de Ingreso</th>
                        <th class="px-4 py-2">Fecha de Salida</th>
                        <th class="px-4 py-2">Fecha de Reserva</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $reservation->user->name }}</td>
                            <td class="px-4 py-2">{{ $reservation->cabin->name }}</td>
                            <td class="px-4 py-2">{{ $reservation->check_in_date }}</td>
                            <td class="px-4 py-2">{{ $reservation->check_out_date }}</td>
                            <td class="px-4 py-2">{{ $reservation->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-admin-layout>
