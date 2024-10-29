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
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Agregar Categoría</h2>

            <div class="mb-4">
                <label for="category_name" class="block text-gray-600 font-medium mb-1">Nombre de Categoría:</label>
                <input type="text" name="category_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="category_name" value="{{ old('category_name') }}">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
                <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Return
                </a>
            </div>
        </form>
    </div>

</x-layout>
