<div>
    @include('landinpage.nav')
    <div class="bg-green-50 h-screen">
        <h1 class="text-center font-bold text-2xl pt-5">Editara Producto: {{auth()->user()->name}} {{auth()->user()->last_name}}</h1>
        <div class="pt-10 lg:pt-5 mx-auto ">
            <div class="px-10">
                <div class="bg-white py-8 px-4 shadow-xl rounded-lg mt-10 lg:mt-0 m-5 md:m-40 lg:m-0 grid grid-cols-1 lg:grid-cols-4 gap-5">
                    <div>
                        <label for="name_product" class="block text-base text-black mb-2 font-bold">Nombre del Producto:</label>
                        <input disabled wire:model="name_product" name="name_product" id="name_product" type="text" placeholder="Ej. Computadora"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('name_product')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-3">
                        <label for="description" class="block text-base text-black mb-2 font-bold">Descripcion:</label>
                        <input disabled wire:model="description" name="description" id="description" type="text" placeholder="Ej. El producto es de color..."
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('description')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-base text-black font-bold">Categoria</label>
                        <select disabled class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-green-50 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category" wire:model="category" id="category">
                            <option value="" selected hidden>Selecciona opción</option>
                                <option class="text-center" value="{{ $category}}">{{$category}}</option>
                        </select>
                        @error('category')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="office" class="block mb-2 text-base text-black font-bold">Sucursal:</label>
                        <select disabled class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-green-50 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="office" wire:model="office" id="office">
                            <option value="" selected hidden>Selecciona opción</option>
                                <option class="text-center" value="{{ $office}}">{{$office}}</option>
                        </select>
                        @error('office')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="price" class="block text-base text-black mb-2 font-bold">Precio:</label>
                        <input disabled wire:model="price" name="price" id="price" type="text" placeholder="Ej. $2,500.00"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('price')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="date_purchase" class="block text-base text-black mb-2 font-bold">Fecha de compra:</label>
                        <input disabled wire:model="date_purchase" name="date_purchase" id="date_purchase" type="date" placeholder="Tu contrasena"
                            class=" w-full px-3 py-2 border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('date_purchase')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="state" class="block mb-2 text-base text-black font-bold">Estado:</label>
                        <select class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-green-50 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="state" wire:model="state" id="state">
                            <option value="" selected hidden>Selecciona opción</option>
                                <option class="text-center" value="{{$state}}">{{$state}}</option>
                                <option class="text-center" value="Cerrado">Cerrado</option>
                        </select>
                        @error('state')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-3">
                        <label for="comment" class="block text-base text-black mb-2 font-bold">Comentarios del Gestor:</label>
                        <input wire:model="comment" name="comment" id="comment" type="text" placeholder="Ej. Solicitar mas producto..."
                            class=" w-full px-3 py-2  border border-gray-400 rounded-md placeholder-gray-600 text-center">
                        @error('comment')
                        <span class="block text-sm font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button wire:click="updateProduct"
                        class=" w-full bg-green-500 hover:bg-green-700 text-white font-bold cursor-pointer py-2 rounded-md shadow-2xl">
                        Guardar Cambios
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

