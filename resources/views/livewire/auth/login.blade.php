<div>
    @include('landinpage.nav')
    <div class="bg-green-50 h-screen">
        <div class="text-center text-green-700 font-bold text-4xl pt-5">
                    <h1>Inicia Sesion</h1>
                </div>
        <div class=" lg:pt-5 mx-auto ">
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-5">
                <div>

                </div>
                <div class="bg-white py-8 px-4 shadow-xl rounded-lg mt-10 lg:mt-0 m-5 md:m-40 lg:m-0">
                    @if(session('message'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('message')}}</p>
                    @endif
                    <div>
                        <label class="block text-base text-black mb-2 font-bold">Correo:</label>
                        <input wire:model="email" type="email" placeholder="Ej. dcva9565@hotmail.com"
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('email')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-base text-black mb-2 font-bold">Contrasena:</label>
                        <input wire:model="password" type="password" placeholder="Tu contrasena"
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('password')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between pb-5">
                        <a href="{{route('register')}}" class="text-gray-500 text-sm hover:text-green-400">No tienes cuenta? Crea una</a>
                    </div>
                    <button wire:click="login"
                        class="w-full bg-green-500 hover:bg-green-700 text-white font-bold cursor-pointer py-2 rounded-md shadow-2xl">
                        Inicia Sesion
                    </button>
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
