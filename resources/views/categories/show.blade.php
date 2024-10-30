<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 p-6">
        <div class="bg-white shadow-2xl rounded-2xl max-w-md w-full p-10 text-center space-y-6">
            <h2 class="text-3xl font-bold text-gray-800 border-b pb-4">Detalles de Categorías</h2>
            <div class="text-left space-y-4">
                <p><strong>ID:</strong> {{ $category->id }}</p>
                <p><strong>Nombre de Categoría:</strong> <span class="text-blue-600 font-medium">{{ $category->category_name }}</span></p>
            </div>
            <div class="flex justify-around pt-6">
                <a href="{{ route('categories.index') }}" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-full hover:bg-blue-600 shadow-lg transform hover:scale-105 transition duration-200">Menu</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="px-6 py-2 bg-yellow-500 text-white font-semibold rounded-full hover:bg-yellow-600 shadow-lg transform hover:scale-105 transition duration-200">Edit</a>
            </div>
        </div>
    </div>

</x-layout>
