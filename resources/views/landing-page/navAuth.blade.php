{{-- nav --}}
    <nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="{{route('index')}}" class="flex items-center py-4 px-2">
								<span class="font-semibold text-2xl text-green-500">Inventario Facil</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
                            <a href="{{route('index')}}" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Inicio</a>
							<a href="{{route('index')}}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Servicios</a>
							<a href="{{route('index')}}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contacto</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="{{route('login')}}" class="py-2 px-5 font-medium text-gray-500 rounded-lg hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
						<a href="{{route('register')}}" class="py-2 px-5 font-medium text-white bg-green-500 rounded-lg hover:bg-green-700 transition duration-300">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Inicio</a></li>
					<li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Servicios</a></li>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contactto</a></li>
				</ul>
			</div>
		</nav>
