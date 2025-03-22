<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Socket Type') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">Add Socket Type</h3>

                    <form action="{{ route('component-socket-types.store') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-white">Socket Type Name</label>
                            <input type="text" name="component_socket_name" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" required>
                        </div>

                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Save Socket Type
                        </button>
                        <a href="{{ route('view_socket_types') }}" class="ml-2 text-gray-300 hover:underline">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>