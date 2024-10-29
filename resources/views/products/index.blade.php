<x-layout>
    <x-slot:heading>
        Listado de Productos
    </x-slot:heading>
<!-- Alert for Success Messages -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Button to Add New Item -->
<div class="flex justify-end mt-4 mb-4 mr-3">
    <a href="{{ route('products.create') }}" class="btn btn-custom"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="0.576" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="0.576" stroke-linecap="round"></path> </g></svg></a>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 bg-white">
        <thead class="bg-gray-100 border-b">
        <tr>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">ID</th>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">Nombre: </th>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">Descripción: </th>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">Cantidad:</th>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">Precio:</th>
            <th class="px-4 py-2 text-left text-gray-700 uppercase text-sm font-medium">Fecha Ingresado:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="even:bg-gray-50 odd:bg-white hover:bg-gray-100">
                <td class="px-4 py-2 text-gray-600">{{ $product->id }}</td>
                <td class="px-4 py-2 text-gray-600">{{ $product->product_name}}</td>
                <td class="px-4 py-2 text-gray-600">{{ $product->product_description}}</td>
                <td class="px-4 py-2 text-gray-600">{{ $product->inStock}}</td>
                <td class="px-4 py-2 text-gray-600">{{ $product->price}}</td>
                <td class="px-4 py-2 text-gray-600">{{ $product->created_at}}</td>
                <td class="px-4 py-2 text-gray-600">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#0008ff" stroke-width="0.12000000000000002" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#0008ff" stroke-width="0.12000000000000002" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#e8e121" stroke-width="0.576" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#e8e121" stroke-width="0.576" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2130fd"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 3L21 21M18 6L17.6 12M17.2498 17.2527L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6H4M16 6L15.4559 4.36754C15.1837 3.55086 14.4194 3 13.5585 3H10.4416C9.94243 3 9.47576 3.18519 9.11865 3.5M11.6133 6H20M14 14V17M10 10V17" stroke="#bd052a" stroke-width="0.21600000000000003" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-layout>
