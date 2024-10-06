<x-app-layout>
    <!-- Componente -->
    <div class="bg-white p-6 rounded-md w-full max-w-7xl mx-auto mt-10">
        <div class="flex items-center justify-between pb-6">
            <div>
                <h2 class="text-2xl text-gray-800 font-bold">Tus Reservas</h2>
                <span class="text-sm text-gray-500">Lista de reservas actuales y futuras</span>
            </div>
            <div class="flex items-center">
                <div class="relative flex items-center bg-gray-100 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <input class="bg-gray-100 outline-none ml-2 w-48" type="text" placeholder="Buscar reserva...">
                </div>
            </div>
        </div>
        <!-- Tabla de Reservas -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto bg-white shadow-lg rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Cliente</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Cabaña</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Inicio</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Fin</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Estado</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="bg-gray-50">
                        <td class="px-4 py-3 flex items-center">
                            <img class="w-10 h-10 rounded-full mr-3" src="https://via.placeholder.com/150" alt="Cliente">
                            <span class="font-medium">Vera Carpenter</span>
                        </td>
                        <td class="px-4 py-3">Cabaña Deluxe</td>
                        <td class="px-4 py-3">12 Oct 2024</td>
                        <td class="px-4 py-3">15 Oct 2024</td>
                        <td class="px-4 py-3">
                            <span class="text-green-700 bg-green-100 px-3 py-1 rounded-full">Activo</span>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="px-4 py-3 flex items-center">
                            <img class="w-10 h-10 rounded-full mr-3" src="https://via.placeholder.com/150" alt="Cliente">
                            <span class="font-medium">Blake Bowman</span>
                        </td>
                        <td class="px-4 py-3">Cabaña Estándar</td>
                        <td class="px-4 py-3">20 Nov 2024</td>
                        <td class="px-4 py-3">25 Nov 2024</td>
                        <td class="px-4 py-3">
                            <span class="text-yellow-700 bg-yellow-100 px-3 py-1 rounded-full">Pendiente</span>
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-3 flex items-center">
                            <img class="w-10 h-10 rounded-full mr-3" src="https://via.placeholder.com/150" alt="Cliente">
                            <span class="font-medium">Dana Moore</span>
                        </td>
                        <td class="px-4 py-3">Cabaña Premium</td>
                        <td class="px-4 py-3">5 Dic 2024</td>
                        <td class="px-4 py-3">10 Dic 2024</td>
                        <td class="px-4 py-3">
                            <span class="text-red-700 bg-red-100 px-3 py-1 rounded-full">Cancelado</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Paginación -->
        <div class="flex justify-between items-center py-4">
            <span class="text-sm text-gray-600">Mostrando 1-3 de 50 Reservas</span>
            <div class="inline-flex">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-l-md hover:bg-indigo-500">Anterior</button>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-500 ml-1">Siguiente</button>
            </div>
        </div>
    </div>
</x-app-layout>
