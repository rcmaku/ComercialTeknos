<x-layout>
    <x-slot:heading>

    </x-slot:heading>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name:</label>
            <input type="text" name="category_name" class="form-control" id="category_name" value="{{ old('category_name') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Return</a>
    </form>
</x-layout>
