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
                            class="flex mt-6 flex-col w-full sticky md:top-36 lg:w-3/4 md:mt-12 px-8 cursor-hover-container">
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
                    <div class="bg-black/30 rounded-lg w-full h-full">
                        <div id="calendar" class="p-4"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-indigo-600 text-white"
            style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1601599561213-832382fd07ba?q=80&w=3328&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div
                class="backdrop-blur-2xl bg-black/20 rounded-2xl flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Productos</h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">Explora Nuestros distintos productos, creados para
                    acompañar tus mejores momentos y refrescar tus experiencias</p>
                <a href="/products"
                    class="mt-10 bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-300 hover:border-transparent">Ver
                    los productos</a>
            </div>
        </div>

        <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-purple-600 text-white"
            style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=3276&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div
                class="backdrop-blur-2xl bg-black/20 rounded-2xl flex flex-col w-3/4 lg:w-1/3 justify-center items-start p-8">
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Origen de la fabrica</h2>
                <p class="text-sm md:text-base text-gray-50 mb-4">Conoce nuestra historia, conoce la razon de inicio de
                    este
                    proyecto y nuestro compromiso con nuestros clientes.</p>
                <a href="/origin"
                    class="mt-10 bg-transparent hover:bg-blue-800 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-white hover:border-transparent">Conocer
                    Historia</a>
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
                        <label for="email" class="block text-sm font-medium text-gray-50">Correo Electrónico</label>
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
</x-app-layout>
