<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('create producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <form method="POST" action="{{route('Producto.store') }}"> 
            @csrf  
            <label >item</label>
            <input name="item">
            <label >descripcion</label>
            <input name="descripcion">

            <button type="submit">save</button>
            <a href="{{ route('Productos.index')}}">cancel</a>

            </form> 



            </div>
        </div>
    </div>
</x-app-layout>