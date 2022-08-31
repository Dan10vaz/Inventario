{{-- nav --}}
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-2xl text-green-500">Inventario Facil</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                @auth
                    <div class="hidden md:flex items-center space-x-1">
                    @can('admin')
                        <a href="{{route('admin')}}"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Tabla de productos</a>
                    @endcan
                    <a href="{{route('capturer')}}"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Registro de Productos</a>
                </div>
                @endauth
                @guest()
                <div class="hidden md:flex items-center space-x-1">
                    <a href="" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Inicio</a>
                    <a href=""
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Servicios</a>
                    <a href=""
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contacto</a>
                </div>
                @endguest

            </div>
            <!-- Secondary Navbar items -->
            @auth
            <div class="hidden md:flex items-center space-x-3 ">
                @role('admin')
                    <p class="font-bold text-lg text-green-600">Administrador: <span>{{auth()->user()->name}}</span></p>
                @endrole
                @role('capturer')
                    <p class="font-bold text-lg text-green-600">Capturista: <span>{{auth()->user()->name}}</span></p>
                @endrole
                <button wire:click='logout'
                    class="py-2 px-5 font-medium text-white bg-red-500 rounded-lg hover:bg-red-700 transition duration-300">Cerrar
                    Sesion</button>
            </div>
            @endauth

            @guest
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="{{route('login')}}"
                    class="py-2 px-5 font-medium text-gray-500 rounded-lg border border-green-500 hover:bg-green-500 hover:text-white transition duration-300">Inicia
                    Sesion</a>
                <a href="{{route('register')}}"
                    class="py-2 px-5 font-medium text-white bg-green-500 rounded-lg hover:bg-green-700 transition duration-300">Registrate</a>
            </div>
            @endguest

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="index.html"
                    class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Inicio</a></li>
            <li><a href="#services"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Servicios</a></li>
            <li><a href="#contact"
                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contactto</a></li>
        </ul>
    </div>
</nav>
<div class="p-10 bg-green-100">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="p-5">
            <h1 class="text-center text-5xl font-bold mt-20 text-gray-500">Obten el sistema de Inventario que tu negocio
                merece.</h1>
            <h2 class="text-center text-green-500 text-4xl font-bold mt-20">Nuestros especialistas te ayudaran en todo
                el proceso de migracion de datos.</h2>
        </div>
        <div>
            <img class="rounded-2xl shadow-2xl" src="{{asset('img/in.jpg')}}" alt="">
        </div>
    </div>
</div>
