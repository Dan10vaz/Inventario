<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @include('landing-page.nav')
    <div class="bg-green-50 h-screen">
        <h1 class="text-center font-bold text-2xl pt-5">Bienvenido al sistema: {{auth()->user()->name}}</h1>
        <div class="pt-10 lg:pt-5 mx-auto ">
            <div class="px-10">
                <div class="bg-white py-8 px-4 shadow-xl rounded-lg mt-10 lg:mt-0 m-5 md:m-40 lg:m-0 grid grid-cols-1 lg:grid-cols-3 gap-5">
                    <div>
                        <label for="name_product" class="block text-base text-black mb-2 font-bold">Nombre del Producto:</label>
                        <input wire:model="name_product" name="name_product" id="name_product" type="text" placeholder="Ej. Computadora"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('name_product')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-base text-black mb-2 font-bold">Descripcion:</label>
                        <input wire:model="description" name="description" id="description" type="text" placeholder="Ej. Daniel Vazquez"
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('description')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="countries" class="block mb-2 text-base text-black font-bold">Selecciona una opcion</label>
                        <select class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-green-100 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category" id="category">
                            @foreach ($categoryData as $category )
                                <option value="{{ $category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="category" class="block text-base text-black mb-2 font-bold">Categoria:</label>
                        <input wire:model="category" name="category" id="category" type="text"
                            placeholder="Ej. Daniel Vazquez"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('category')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-base text-black mb-2 font-bold">Sucursal:</label>
                        <input wire:model="office" type="office" placeholder="Ej. dcva9565@hotmail.com"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('office')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block text-base text-black mb-2 font-bold">Precio:</label>
                        <input wire:model="price" name="price" id="price" type="password" placeholder="Tu contrasena"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('price')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="date_purchase" class="block text-base text-black mb-2 font-bold">Fecha de compra:</label>
                        <input wire:model="date_purchase" name="date_purchase" id="date_purchase" type="password" placeholder="Tu contrasena"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('date_purchase')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button wire:click="register"
                        class="w-full bg-green-500 hover:bg-green-700 text-white font-bold cursor-pointer py-2 rounded-md shadow-2xl">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
