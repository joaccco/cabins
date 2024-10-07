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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Menu -->
        <div class="w-full md:block md:w-auto hidden" id="mobile-menu">
            <ul class="flex flex-col md:flex-row md:space-x-8 md:mt-0 text-lg font-semibold">
                <li>
                    <a href="/"
                        class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a href="/cabins"
                        class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Cabañas
                    </a>
                </li>
                <li>
                    <a href="/contact"
                        class="block py-2 pr-4 pl-3 text-black rounded hover:bg-gray-200 md:hover:text-blue-600 md:p-0">
                        Contacto
                    </a>
                </li>
            </ul>
        </div>

        @auth
            {{-- Perfil --}}
            <div class="relative" x-data="{ open: false }">
                <div class=" border-4 rounded-full p-1">
                    <button x-on:click="open = !open" type="button"
                        class="flex items-center text-sm font-medium text-white ">
                        <img class="h-6 w-6 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    </button>
                </div>

                <div x-show="open" x-on:click.away="open = false"
                    class="z-50 absolute mt-6 -right-6 2xl:-right-14 w-48 bg-white backdrop-blur-2xl divide-y divide-gray-300 rounded-md shadow-sm "
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="{{ route('profile.show') }}"
                        class="flex justify-end px-4 py-2 text-sm text-back font-extralight" role="menuitem" tabindex="-1"
                        id="user-menu-item-0">Tu Perfil</a>
                    <a href="/reservations" class="flex justify-end px-4 py-2 text-sm text-back font-extralight" role="menuitem"
                        tabindex="-1" id="user-menu-item-1">Mis Reservas</a>
                    @can('admin.home')
                        <a href="{{ route('admin.home') }}" class="flex justify-end px-4 py-2 text-sm text-back font-extralight"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Panel de
                            Administracion</a>
                    @endcan
                    <form method="POST" class="flex justify-end" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit" href="{{ route('logout') }}"
                            class="px-4 py-2 text-sm text-backfont-extralight" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Cerrar Sesion</button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Iniciar
                Sesión</a>
            <a href="{{ route('register') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Registrarme</a>
        @endauth
    </div>
</nav>

<!-- JavaScript to handle mobile menu toggle -->
<script>
    z
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

