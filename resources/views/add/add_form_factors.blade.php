<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Component Form Factor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">Add New Form Factor</h3>

                    <form action="{{ route('component-form-factors.store') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-white">Form Factor Name</label>
                            <input type="text" name="component_form_factor_name" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" required>
                        </div>

                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Save Form Factor
                        </button>
                        <a href="{{ route('view_form_factors') }}" class="ml-2 text-gray-300 hover:underline">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>