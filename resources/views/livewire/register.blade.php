<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @include('landing-page.nav')
    <div class="bg-green-50 h-screen">
        <div class="pt-10 lg:pt-5 mx-auto ">
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-5">
                <div class="text-center text-green-700 font-bold text-4xl mt-44">
                    <h1>Registrate y comienza a dar soluciones a tu negocio</h1>
                </div>
                <div class="bg-white py-8 px-4 shadow-xl rounded-lg mt-10 lg:mt-0 m-5 md:m-40 lg:m-0">
                    <div>
                        <label for="name" class="block text-base text-black mb-2 font-bold">Nombre:</label>
                        <input wire:model="name" name="name" id="name" type="text" placeholder="Ej. Daniel Vazquez"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('name')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="block text-base text-black mb-2 font-bold">Apellido
                            Paterno:</label>
                        <input wire:model="last_name" name="last_name" id="last_name" type="text" placeholder="Ej. Daniel Vazquez"
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('last_name')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="second_last_name" class="block text-base text-black mb-2 font-bold">Apellido
                            Materno:</label>
                        <input wire:model="second_last_name" name="second_last_name" id="second_last_name" type="text"
                            placeholder="Ej. Daniel Vazquez"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('second_last_name')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-base text-black mb-2 font-bold">Correo:</label>
                        <input wire:model="email" type="email" placeholder="Ej. dcva9565@hotmail.com"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('email')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-base text-black mb-2 font-bold">Contrasena:</label>
                        <input wire:model="password" type="password" placeholder="Tu contrasena"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('password')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between pb-5">
                        <a href="{{route('login')}}" class="text-gray-500 text-sm hover:text-green-400">Ya tienes cuenta? Inicia
                            Sesión</a>
                    </div>
                    <button wire:click="save"
                        class="w-full bg-green-500 hover:bg-green-700 text-white font-bold cursor-pointer py-2 rounded-md shadow-2xl">
                        Crear Cuenta
                    </button>
                </div>
                <div class="text-center text-green-700 font-bold text-4xl mt-44">
                    <h1>Es momento de que intentes algo diferente</h1>
                </div>
            </div>
        </div>
    </div>
</div>
