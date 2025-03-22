<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Component Chipsets') }}
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

                    <h3 class="text-lg font-bold">Component Chipsets</h3>

                    <table class="min-w-full divide-y divide-gray-200 mt-4 w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Chipset Name</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chipset as $chip)
                                <tr>
                                    <td class="border px-4 py-2">{{ $chip->component_chipset_id }}</td>
                                    <td class="border px-4 py-2">{{ $chip->component_chipset_name }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{route ('component-chipset-types.edit', $chip->component_chipset_id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                                        <form action="{{ route('component-chipset-types.destroy', $chip->component_chipset_id) }}" method="POST" 
                                            onsubmit="return confirm('Are you sure you want to delete this chipset?');" class="inline">
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
                                <a href="{{ route('component-chipset-types.create') }}"
                                   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Add Chipset
                                </a>
                            </td>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>