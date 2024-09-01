<nav class="bg-white p-4 shadow-lg">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img class="w-32" src="/img/logo.png" alt="Your Company">
        </a>

        <!-- Mobile Menu Button -->
        <div class="flex items-center md:hidden">
            <button id="menu-toggle" type="button"
                class="text-black focus:outline-none focus:ring-2 focus:ring-black rounded-lg">
                <!-- Hamburger icon -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Menu -->
        <div class="w-full md:block md:w-auto hidden" id="mobile-menu">
            <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 text-lg font-semibold">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Cabañas
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Contacto
                    </a>
                </li>
            </ul>
        </div>

        @auth
        <!-- User Menus -->
        <div class="grid grid-cols-3 gap-4 bg-gray-100 p-3 rounded-full shadow-lg">
            <!-- Perfil -->
            <div class="relative" x-data="{ open: false }">
                <button x-on:click="open = !open" type="button" class="flex items-center text-black hover:text-blue-600">
                    <svg class="h-8 w-8 rounded-full" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.20914 0 4-1.79086 4-4s-1.79086-4-4-4-4 1.79086-4 4 1.79086 4 4 4zm0 2c-3.31222 0-6 1.68778-6 3.75V19h12v-1.25c0-2.06222-2.68778-3.75-6-3.75z" />
                    </svg>
                </button>
                <div x-show="open" x-on:click.away="open = false"
                    class="absolute top-16 right-0 w-48 bg-white shadow-lg rounded-lg p-4">
                    <div class="space-y-4">
                        <a href="#" class="block text-gray-700 hover:text-gray-900">Perfil</a>
                        <a href="#" class="block text-gray-700 hover:text-gray-900">Configuraciones</a>
                        <a href="#" class="block text-gray-700 hover:text-gray-900">Salir</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <a href="{{ route('login') }}" class="text-black bg-white border border-black hover:bg-gray-200 rounded-lg px-4 py-2">Iniciar
            Sesión</a>
        @endauth
    </div>
</nav>

<!-- JavaScript to handle mobile menu toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>