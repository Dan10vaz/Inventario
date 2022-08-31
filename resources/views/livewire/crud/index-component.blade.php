<div>
    @can('admin')
    @include('landinpage.nav')
    <h1 class="text-center font-bold text-2xl text-green-400 mt-5">Bandeja de productos</h1>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg px-5 mt-5">
        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase">
                <tr class="text-center">
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombre del Producto
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Sucursal
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b text-center">
                    <th scope="row" class="py-4 px-6 font-medium  whitespace-nowrap">
                        {{$product->id}}
                    </th>
                    <td class="py-4 px-6">
                        {{$product->name_product}}
                    </td>
                    <td class="py-4 px-6">
                        {{$product->category}}
                    </td>
                    <td class="py-4 px-6">
                        {{$product->office}}
                    </td>
                    <td class="py-4 px-2">
                        <a href="{{route('edit',['id'=>$product->id])}}" class="text-white font-bold bg-blue-500 hover:bg-blue-700 py-1 px-2 rounded-lg">Editar</a>
                        {{-- <button class="text-white bg-blue-500 hover:bg-blue-700 py-1 px-2 rounded-lg">Editar</button> --}}
                        <button wire:click="delete({{$product->id}})"
                            class="text-white bg-red-500 hover:bg-red-700 py-1 px-2 ml-2 rounded-lg">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endcan
</div>
