<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PC Components') }}
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

                    <h3 class="text-lg font-bold">PC Components</h3>

                    <table class="min-w-full divide-y divide-gray-200 mt-4 w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Component Name</th>
                                <th class="px-4 py-2">Component Price</th>
                                <th class="px-4 py-2">Type</th>
                                <th class="px-4 py-2">Brand</th>
                                <th class="px-4 py-2">Socket</th>
                                <th class="px-4 py-2">Chipset</th>
                                <th class="px-4 py-2">Form Factor</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($components as $component)
                                <tr>
                                    <td class="border px-4 py-2">{{ $component->pc_component_id }}</td>
                                    <td class="border px-4 py-2">{{ $component->pc_component_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->pc_component_price ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->component_types->component_type_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->component_brand->component_brand_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->component_socket->component_socket_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->component_chipset->component_chipset_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">{{ $component->component_form_factor->component_form_factor_name ?? 'Empty'}}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('pc-components.edit', $component->pc_component_id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                                        <form action="{{ route('pc-components.destroy', $component->pc_component_id) }}" method="POST" 
                                            onsubmit="return confirm('Are you sure you want to delete this component?');" class="inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                              Delete
                                          </button>
                                      </form>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="bg-gray-100 dark:bg-gray-800">
                                <td colspan="8" class="px-4 py-4 text-center">
                                    <a href="{{ route('pc-components.create') }}"
                                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Add Component
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
