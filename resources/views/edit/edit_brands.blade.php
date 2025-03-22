<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Component Brand') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">Edit Brand</h3>

                    <!-- Update Form -->
                    <form action="{{ route('component-brands.update', $brand->component_brand_id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Laravel requires this for update requests -->

                        <!-- Brand Name Input -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                Brand Name
                            </label>
                            <input type="text" name="component_brand_name" value="{{ old('component_brand_name', $brand->component_brand_name) }}"
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
                                Update Brand
                            </button>
                        </div>
                    </form>

                    <!-- Back Button -->
                    <div class="mt-4">
                        <a href="{{ route('view_brands') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
                            Cancel
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
