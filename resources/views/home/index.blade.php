<x-app-layout class="bg-transparent">
    <!-- component -->
    <div class="relative">
        <!-- Botón de flecha hacia abajo -->
        <div class="fixed bottom-4 z-50 w-full flex justify-center">
            <button id="scroll-down-button" class="animate-bounce  rounded-full bg-slate-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="sticky h-screen flex flex-col items-center justify-center"
            style="background-size: cover; background-image: url('/img/losprimos.mp4')">
            <div class="px-6 lg:px-8 grid grid-cols-5">
                <div class="col-span-2 text-black font-sans antialiased py-8">
                    <div class="container mx-auto flex flex-col items-center ">
                        <div class="flex-shrink-0 flex">
                            <img class="justify-center xl:ml-2 lg:ml-2 lg:px-8 xl:w-48 2xl:w-48 lg:w-48 w-24 mt-12"
                                src="/img/logo.png" alt="Your Company">
                        </div>
                        <div
                            class="flex mt-6 mb-12 flex-col w-full sticky md:top-36 lg:w-3/4 md:mt-12 px-8 cursor-hover-container">
                            <div class="text-center">
                                <h1 class="text-4xl font-semibold text-gray-800 sm:text-6xl">Bienvenidos a <br>
                                    <span class="font-bold">Cabañas los Primos</span>
                                </h1>
                                <p class="mt-6 text-xl text-gray-600">Rústico encanto, comodidad en cada rincón</p>
                            </div>
                        </div>

                        <div class="mt-12 mb-12" id="loader"></div>
                        <a href="https://wa.me/c/">
                            <button class="p-2 px-2 bg-green-500 text-black rounded-2xl flex items-center space-x-2">
                                <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.7595 11.4133C24.1224 11.0383 24.3262 10.53 24.3262 9.99996C24.3262 9.46996 24.1224 8.96163 23.7595 8.58663L16.4539 1.0413C16.0904 0.666104 15.5974 0.455322 15.0834 0.455322C14.5694 0.455322 14.0764 0.666104 13.713 1.0413C13.3495 1.41649 13.1453 1.92536 13.1453 2.45596C13.1453 2.98657 13.3495 3.49544 13.713 3.87063L17.712 7.99996L2.81259 7.99996C2.29873 7.99996 1.80592 8.21068 1.44257 8.58575C1.07922 8.96082 0.875088 9.46953 0.875088 9.99996C0.875088 10.5304 1.07922 11.0391 1.44257 11.4142C1.80592 11.7892 2.29873 12 2.81259 12L17.712 12L13.713 16.128C13.533 16.3137 13.3902 16.5343 13.2928 16.777C13.1954 17.0197 13.1453 17.2799 13.1453 17.5426C13.1453 17.8054 13.1954 18.0655 13.2928 18.3082C13.3902 18.551 13.533 18.7715 13.713 18.9573C13.8929 19.1431 14.1066 19.2904 14.3417 19.391C14.5769 19.4915 14.8289 19.5433 15.0834 19.5433C15.3379 19.5433 15.59 19.4915 15.8251 19.391C16.0602 19.2904 16.2739 19.1431 16.4539 18.9573L23.7595 11.4133Z"
                                        fill="#FFFFFF" />
                                </svg>
                                <p class="font-bold text-white">Deseo Reservar Cabaña</p>
                            </button>
                        </a>

                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-black/30 rounded-lg w-full h-full p-4">
                        <h3 class="text-white text-lg mb-4">Selecciona tus fechas de reserva</h3>

                        <form action="{{ route('store.reservation') }}" method="POST">
                            @csrf
                            <!-- Fecha de ingreso -->
                            <label class="text-white">Fecha de ingreso:</label>
                            <input name="check_in_date" type="date" class="w-full p-2 mb-4 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                            <!-- Fecha de salida -->
                            <label class="text-white">Fecha de salida:</label>
                            <input name="check_out_date" type="date" class="w-full p-2 mb-4 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                            <!-- Selección de cabaña -->
                            <label class="text-white">Selecciona la cabaña:</label>
                            <select name="cabin_id" class="w-full p-2 mb-4 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                @foreach($cabins as $cabin)
                                    <option value="{{ $cabin->id }}">{{ $cabin->name }}</option>
                                @endforeach
                            </select>

                            <button type="submit" class="bg-green-500 text-white p-2 rounded">Reservar</button>
                        </form>

                        <!-- Mensaje de éxito -->
                        @if(session('success'))
                            <div class="bg-green-500 text-white p-4 rounded mt-4">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>




            </div>
        </div>

        <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-purple-600 text-white"
            style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=3276&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div
                class="backdrop-blur-2xl bg-black/20 rounded-2xl flex flex-col w-full lg:w-3/4 justify-center items-start p-8">
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-4">Cabañas Disponibles</h2>
                <p class="text-sm md:text-base text-gray-50 mb-6">Encuentra la cabaña perfecta para tu próxima escapada.
                    Usa los filtros para ajustar la búsqueda según tus necesidades.</p>

                <!-- Filtros de búsqueda -->
                <div class="w-full mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <select class="w-full p-2 rounded bg-gray-100 text-gray-700" name="ubicacion">
                            <option value="">Seleccionar Ubicación</option>
                            <option value="montaña">Montaña</option>
                            <option value="playa">Playa</option>
                            <option value="campo">Campo</option>
                        </select>
                        <select class="w-full p-2 rounded bg-gray-100 text-gray-700" name="capacidad">
                            <option value="">Capacidad</option>
                            <option value="2">2 Personas</option>
                            <option value="4">4 Personas</option>
                            <option value="6">6 Personas</option>
                        </select>
                        <select class="w-full p-2 rounded bg-gray-100 text-gray-700" name="tipo">
                            <option value="">Tipo de Cabaña</option>
                            <option value="familiar">Familiar</option>
                            <option value="romantica">Romántica</option>
                            <option value="lujo">De Lujo</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <select class="w-full p-2 rounded bg-gray-100 text-gray-700" name="servicios">
                            <option value="">Servicios</option>
                            <option value="piscina">Piscina</option>
                            <option value="jacuzzi">Jacuzzi</option>
                            <option value="wifi">WiFi</option>
                            <option value="pet">Pet-Friendly</option>
                        </select>
                        <input type="text" class="w-full p-2 rounded bg-gray-100 text-gray-700"
                            placeholder="Rango de precios" name="precio" />
                        <button
                            class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-all">Buscar</button>
                    </div>
                </div>

                <!-- Galería de cabañas -->
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Cabaña 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Cabaña 1"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Cabaña en la Montaña</h3>
                            <p class="text-sm text-gray-600">Capacidad: 4 personas | WiFi, Piscina</p>
                            <p class="text-xl font-bold text-gray-800 mt-2">$150 por noche</p>
                            <button
                                class="w-full mt-4 bg-purple-600 text-white rounded py-2 hover:bg-purple-700 transition-all">Reservar</button>
                        </div>
                    </div>
                    <!-- Cabaña 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Cabaña 2"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Cabaña Romántica en la Playa</h3>
                            <p class="text-sm text-gray-600">Capacidad: 2 personas | Jacuzzi, WiFi</p>
                            <p class="text-xl font-bold text-gray-800 mt-2">$200 por noche</p>
                            <button
                                class="w-full mt-4 bg-purple-600 text-white rounded py-2 hover:bg-purple-700 transition-all">Reservar</button>
                        </div>
                    </div>
                    <!-- Cabaña 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/400x300" alt="Cabaña 3"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Cabaña Familiar en el Campo</h3>
                            <p class="text-sm text-gray-600">Capacidad: 6 personas | Pet-Friendly, WiFi</p>
                            <p class="text-xl font-bold text-gray-800 mt-2">$120 por noche</p>
                            <button
                                class="w-full mt-4 bg-purple-600 text-white rounded py-2 hover:bg-purple-700 transition-all">Reservar</button>
                        </div>
                    </div>
                </div>

                <!-- Comparar cabañas -->
                <div class="w-full mt-6">
                    <h3 class="text-2xl mb-4">Comparar Cabañas</h3>
                    <button
                        class="bg-transparent border border-white text-white py-2 px-4 rounded hover:bg-blue-800 hover:border-transparent transition-all">Comparar
                        Seleccionadas</button>
                </div>
            </div>
        </div>

        <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-indigo-600 text-white"
            style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1601599561213-832382fd07ba?q=80&w=3328&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div
                class="backdrop-blur-2xl bg-black/20 rounded-2xl flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Sitios Turísticos</h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">Descubre los lugares más visitados y emblemáticos de
                    nuestra
                    región. Estos sitios turísticos te dejarán sin aliento con su belleza y cultura.</p>
                <a href="/tourist-spots"
                    class="mt-10 bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Ver
                    más lugares</a>
            </div>
        </div>

        <!-- Sección adicional de sitios turísticos -->

        <div class="w-full flex flex-col lg:flex-row justify-center items-center bg-indigo-600 text-white py-12 px-4">
            <!-- Primer sitio turístico -->
            <div class="max-w-md p-6 bg-white/20 rounded-lg m-4 backdrop-blur-2xl">
                <img src="https://images.unsplash.com/photo-1543248930-e7ad442a9c5f?ixlib=rb-4.0.3&q=80&fit=crop&w=500"
                    alt="Cataratas del Iguazú" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2">Cataratas del Iguazú</h3>
                <p class="text-sm text-gray-200 mb-4">Uno de los destinos más espectaculares del mundo, las Cataratas
                    del
                    Iguazú ofrecen una experiencia única con su inmensidad y su belleza natural.</p>
                <a href="/tourist-spots/iguazu"
                    class="bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Descubre
                    más</a>
            </div>

            <!-- Segundo sitio turístico -->
            <div class="max-w-md p-6 bg-white/20 rounded-lg m-4 backdrop-blur-2xl">
                <img src="https://images.unsplash.com/photo-1509358277551-17c2aef6d26c?ixlib=rb-4.0.3&q=80&fit=crop&w=500"
                    alt="Glaciar Perito Moreno" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2">Glaciar Perito Moreno</h3>
                <p class="text-sm text-gray-200 mb-4">Una maravilla natural en la Patagonia, el Glaciar Perito Moreno es
                    uno de
                    los glaciares más importantes del mundo y un destino imperdible para los amantes de la naturaleza.
                </p>
                <a href="/tourist-spots/perito-moreno"
                    class="bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Explora
                    este lugar</a>
            </div>

            <!-- Tercer sitio turístico -->
            <div class="max-w-md p-6 bg-white/20 rounded-lg m-4 backdrop-blur-2xl">
                <img src="https://images.unsplash.com/photo-1519207711697-1d20efb41d76?ixlib=rb-4.0.3&q=80&fit=crop&w=500"
                    alt="Bariloche" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2">Bariloche</h3>
                <p class="text-sm text-gray-200 mb-4">Famoso por sus paisajes de montaña y sus lagos, Bariloche es el
                    destino
                    ideal tanto en invierno para esquiar como en verano para explorar la naturaleza.</p>
                <a href="/tourist-spots/bariloche"
                    class="bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Conoce
                    más</a>
            </div>
        </div>


        <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-neutral-800 text-white"
            style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?q=80&w=3000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div
                class="backdrop-blur-2xl bg-black/20 rounded-2xl flex flex-col w-3/4 lg:w-1/3 justify-center items-start p-8">
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Contáctanos</h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">¿Tienes alguna consulta o deseas ser parte de nuestra
                    familia? Rellena el siguiente formulario y nos pondremos en contacto contigo.</p>
                <form action="/submit_contact" method="POST" class="w-full">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-50">Nombre</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-50">Correo
                            Electrónico</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-50">Mensaje</label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md">Enviar
                        Mensaje</button>
                </form>
            </div>
        </div>
    </div>
    <style>
        .cursor-hover-container {
            position: relative;
            overflow: hidden;
        }

        .cursor-hover-container:hover h1,
        .cursor-hover-container:hover p {
            font-weight: 900;
            /* O un peso más grande */
            color: black;
            transition: all 0.2s ease;
            /* Suaviza la transición del efecto */
        }
    </style>
    <script>
        const followCursorContainer = document.querySelector('.cursor-hover-container');

        followCursorContainer.addEventListener('mouseover', () => {
            const elements = followCursorContainer.querySelectorAll('h1, p');
            elements.forEach((elem) => {
                elem.style.fontWeight = '600'; // O cualquier estilo
            })
        });

        document.getElementById('scroll-down-button').addEventListener('click', function() {
            window.scrollBy({
                top: window.innerHeight,
                left: 0,
                behavior: 'smooth'
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new Calendar(calendarEl, {
                plugins: [dayGridPlugin, interactionPlugin],
                initialView: 'dayGridMonth',
                selectable: true,
                events: '/events', // Aquí puedes enlazar a una ruta para obtener eventos desde Laravel
                dateClick: function(info) {
                    alert('Date: ' + info.dateStr);
                }
            });
            calendar.render();
        });
    </script>
    <script>
        // Inicializar Flatpickr para el check-in
        flatpickr("#check-in", {
            dateFormat: "Y-m-d",
            minDate: "today", // Desactivar fechas pasadas
        });

        // Inicializar Flatpickr para el check-out
        flatpickr("#check-out", {
            dateFormat: "Y-m-d",
            minDate: "today", // Desactivar fechas pasadas
        });
    </script>
    <script>
        // Variables para las fechas seleccionadas
        let checkInDate;
        let checkOutDate;

        // Inicializar Flatpickr para el check-in
        flatpickr("#check-in", {
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates) {
                checkInDate = selectedDates[0];
                updateCalendar();
            }
        });

        // Inicializar Flatpickr para el check-out
        flatpickr("#check-out", {
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates) {
                checkOutDate = selectedDates[0];
                updateCalendar();
            }
        });

        // Inicializar FullCalendar
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                events: [], // Aquí se añadirán las fechas seleccionadas

                // Función para actualizar las fechas seleccionadas en el calendario
                eventDidMount: function(info) {
                    info.el.style.backgroundColor = '#4CAF50'; // Color de fondo para las fechas seleccionadas
                    info.el.style.color = 'white'; // Color del texto para las fechas seleccionadas
                }
            });

            calendar.render();

            // Función para actualizar el calendario con las fechas seleccionadas
            function updateCalendar() {
                // Limpiar eventos existentes
                calendar.removeAllEvents();

                if (checkInDate) {
                    calendar.addEvent({
                        title: 'Fecha de ingreso',
                        start: checkInDate,
                        allDay: true
                    });
                }

                if (checkOutDate) {
                    calendar.addEvent({
                        title: 'Fecha de salida',
                        start: checkOutDate,
                        allDay: true
                    });
                }
            }
        });
    </script>


</x-app-layout>
