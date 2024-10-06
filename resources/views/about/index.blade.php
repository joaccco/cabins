<x-app-layout class="bg-gradient-to-b h-screen from-blue-50 to-indigo-50">
    <!-- Sección de Bienvenida -->
    <section class="relative pt-16 h-screenq bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto">
            <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                <span class="font-semibold text-lg text-blue-600 mb-2 block">Nuestros Servicios</span>
                <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-blue-900 mb-4">Lo que Ofrecemos</h2>
                <p class="text-base text-gray-600">
                    Disfruta de la naturaleza con las comodidades que buscas. Nuestras cabañas ofrecen una experiencia única en un entorno tranquilo y relajante.
                </p>
            </div>

            <div class="relative">
                <!-- Carrusel -->
                <div class="carousel w-full overflow-hidden">
                    <div class="carousel-inner flex transition-transform duration-500">
                        <!-- Item 1: Ambiente Natural -->
                        <div class="carousel-item w-full md:w-1/3 flex-shrink-0 p-2">
                            <div class="p-10 md:px-7 xl:px-10 rounded-3xl bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="w-[70px] h-[70px] flex items-center justify-center bg-gradient-to-r from-green-400 to-green-600 text-white rounded-full mb-8">
                                    <span class="iconify" data-icon="mdi:leaf" data-inline="false"></span>
                                </div>
                                <h4 class="font-semibold text-xl text-blue-900 mb-3">Ambiente Natural</h4>
                                <p class="text-gray-600">
                                    Nuestras cabañas están situadas en medio de la naturaleza, ofreciendo un entorno tranquilo rodeado de árboles y paisajes hermosos.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2: Confort Moderno -->
                        <div class="carousel-item w-full md:w-1/3 flex-shrink-0 p-2">
                            <div class="p-10 md:px-7 xl:px-10 rounded-3xl bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="w-[70px] h-[70px] flex items-center justify-center bg-gradient-to-r from-blue-400 to-indigo-600 text-white rounded-full mb-8">
                                    <span class="iconify" data-icon="mdi:couch" data-inline="false"></span>
                                </div>
                                <h4 class="font-semibold text-xl text-blue-900 mb-3">Confort Moderno</h4>
                                <p class="text-gray-600">
                                    Cada cabaña está equipada con tecnología moderna y todas las comodidades para una estancia placentera, sin perder el encanto rústico.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3: Actividades al Aire Libre -->
                        <div class="carousel-item w-full md:w-1/3 flex-shrink-0 p-2">
                            <div class="p-10 md:px-7 xl:px-10 rounded-3xl bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="w-[70px] h-[70px] flex items-center justify-center bg-gradient-to-r from-yellow-400 to-yellow-600 text-white rounded-full mb-8">
                                    <span class="iconify" data-icon="mdi:hiking" data-inline="false"></span>
                                </div>
                                <h4 class="font-semibold text-xl text-blue-900 mb-3">Actividades al Aire Libre</h4>
                                <p class="text-gray-600">
                                    Ofrecemos una amplia variedad de actividades al aire libre, desde caminatas por senderos naturales hasta paseos en bicicleta y pesca.
                                </p>
                            </div>
                        </div>

                        <!-- Item 4: Ubicación Privilegiada -->
                        <div class="carousel-item w-full md:w-1/3 flex-shrink-0 p-2">
                            <div class="p-10 md:px-7 xl:px-10 rounded-3xl bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="text-blue-700 p-3 text-center inline-flex items-center justify-center w-14 h-14 mb-5 shadow-lg rounded-full bg-white">
                                    <span class="iconify" data-icon="mdi:map-marker" data-inline="false"></span>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold text-blue-900">Ubicación Privilegiada</h6>
                                <p class="mb-4 text-blue-700 text-center">
                                    Nuestras cabañas están situadas en el corazón de la naturaleza, rodeadas de paisajes increíbles, ideal para desconectar del estrés de la ciudad.
                                </p>
                            </div>
                        </div>

                        <!-- Item 5: Calidez y Comodidad -->
                        <div class="carousel-item w-full md:w-1/3 flex-shrink-0 p-2">
                            <div class="p-10 md:px-7 xl:px-10 rounded-3xl bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-14 h-14 mb-5 shadow-lg rounded-full bg-white">
                                    <span class="iconify" data-icon="mdi:fire" data-inline="false"></span>
                                </div>
                                <h6 class="text-xl mb-1 font-semibold text-pink-900">Calidez y Comodidad</h6>
                                <p class="mb-4 text-pink-600 text-center">
                                    Equipadas con chimeneas, calefacción y mobiliario rústico, nuestras cabañas proporcionan el confort necesario para cualquier estación del año.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Controladores del Carrusel -->
                    <button class="absolute top-0 left-0 px-4 py-2 text-white bg-blue-600 rounded-l-lg" onclick="prevSlide()">❮</button>
                    <button class="absolute top-0 right-0 px-4 py-2 text-white bg-blue-600 rounded-r-lg" onclick="nextSlide()">❯</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;

        function updateCarousel() {
            const offset = -currentIndex * (100 / 3); // Cambia el valor 3 para el número de items mostrados
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % Math.ceil(totalItems / 3); // Modificado para el número de grupos de 3
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + Math.ceil(totalItems / 3)) % Math.ceil(totalItems / 3);
            updateCarousel();
        }

        // Inicializa el carrusel
        updateCarousel();
    </script>
</x-app-layout>
