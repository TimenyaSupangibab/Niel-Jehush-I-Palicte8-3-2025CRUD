<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Component Brands') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 overflow-x-auto">

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 mb-4 rounded">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="bg-red-500 text-white p-4 mb-4 rounded">
                            {{ session('error') }}
                        </div>
                    @endif

                    <h3 class="text-lg font-bold">Component Brands</h3>

                    <table class="min-w-full divide-y divide-gray-200 mt-4 w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Brand Name</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td class="border px-4 py-2">{{ $brand->component_brand_id }}</td>
                                    <td class="border px-4 py-2">{{ $brand->component_brand_name }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{route ('component-brands.edit', $brand->component_brand_id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                                        <form action="{{ route('component-brands.destroy', $brand->component_brand_id) }}" method="POST" 
                                            onsubmit="return confirm('Are you sure you want to delete this brand?');" class="inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                              Delete
                                          </button>
                                      </form>
                                    </td>
                                </tr>
                                <tr class="bg-gray-100 dark:bg-gray-800">
                            </tr>
                            @endforeach

                            <td colspan="3" class="px-4 py-4 text-center">
                                <a href="{{ route('component-brands.create') }}"
                                   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Add Brand
                                </a>
                            </td>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>