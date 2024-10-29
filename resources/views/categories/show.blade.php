<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 p-6">
        <div class="bg-white shadow-2xl rounded-2xl max-w-md w-full p-10 text-center space-y-6">
            <h2 class="text-3xl font-bold text-gray-800 border-b pb-4">Detalles de Categorías</h2>
            <div class="text-left space-y-4">
                <p><strong>ID:</strong> {{ $product->id }}</p>
                <p><strong>Nombre del Producto:</strong> <span class="text-blue-600 font-medium">{{ $product->product_name }}</span></p>
                <p><strong>Descripción del Producto:</strong> <span class="text-gray-600">{{ $product->product_description }}</span></p>
                <p><strong>Cantidad en Existencias:</strong> <span class="text-green-600 font-semibold">{{ $product->inStock }}</span></p>
                <p><strong>Precio:</strong> <span class="text-red-500 font-bold">${{ number_format($product->price, 2) }}</span></p>
            </div>
            <div class="flex justify-around pt-6">
                <a href="{{ route('products.index') }}" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-full hover:bg-blue-600 shadow-lg transform hover:scale-105 transition duration-200">Menu</a>
                <a href="{{ route('products.edit', $product->id) }}" class="px-6 py-2 bg-yellow-500 text-white font-semibold rounded-full hover:bg-yellow-600 shadow-lg transform hover:scale-105 transition duration-200">Edit</a>
            </div>
        </div>
    </div>

</x-layout>
