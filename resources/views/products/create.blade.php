<x-layout>
    <x-slot:heading>

    </x-slot:heading>
<!-- Alert for Errors Messages -->
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Agregar Producto</h2>

            <div class="mb-4">
                <label for="product_name" class="block text-gray-600 font-medium mb-1">Nombre de Producto:</label>
                <input type="text" name="product_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="product_name" value="{{ old('product_name') }}">
            </div>

            <div class="mb-4">
                <label for="product_description" class="block text-gray-600 font-medium mb-1">Descripción de Producto:</label>
                <input type="text" name="product_description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="product_description" value="{{ old('product_description') }}">
            </div>

            <div class="mb-4">
                <label for="inStock" class="block text-gray-600 font-medium mb-1">Producto en Existencias:</label>
                <input type="number" name="inStock" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inStock" value="{{ old('inStock') }}">
            </div>

            <div class="mb-4">
                <label for="category_name" class="block text-gray-600 font-medium mb-1">Select Category:</label>
                <select name="categories[]" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="category_name">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-600 font-medium mb-1">Precio:</label>
                <input type="number" step="0.01" name="price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="price" value="{{ old('price') }}">
            </div>


            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
                <a href="{{ route('products.index') }}" class="bg-gray-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Return
                </a>
            </div>
        </form>
    </div>

</x-layout>
