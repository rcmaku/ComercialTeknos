<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="product_name" class="block text-sm font-medium text-gray-700 mb-2">Product Name:</label>
            <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}" required
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="product_description" class="block text-sm font-medium text-gray-700 mb-2">Product Description:</label>
            <input type="text" name="product_description" id="product_description" value="{{ old('product_description') }}"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="inStock" class="block text-sm font-medium text-gray-700 mb-2">Product In Stock:</label>
            <input type="text" name="inStock" id="inStock" value="{{ old('inStock') }}"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <div class="mb-5">
            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Product Price:</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <div class="mb-4">
            <label for="category_name" class="block text-gray-600 font-medium mb-1">Select Category:</label>
            <select name="categories[]" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="category_name">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="w-full py-3 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Update
            </button>
            <a href="{{ route('products.index') }}" class="w-full py-3 px-4 bg-gray-500 text-white text-center rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Return
            </a>
        </div>
    </form>

</x-layout>
