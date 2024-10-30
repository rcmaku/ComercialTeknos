<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="category_name" class="block text-sm font-medium text-gray-700 mb-2">Category Name:</label>
            <input type="text" name="category_name" id="category_name" value="{{ old('category_name') }}" required
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="w-full py-3 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Update
            </button>
            <a href="{{ route('categories.index') }}" class="w-full py-3 px-4 bg-gray-500 text-white text-center rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                Return
            </a>
        </div>
    </form>

</x-layout>
