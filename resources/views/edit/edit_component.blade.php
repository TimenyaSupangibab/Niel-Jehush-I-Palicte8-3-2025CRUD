<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Component') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if ($errors->any())
    <div class="mt-4 text-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <h3 class="text-lg font-bold">Edit Component</h3>

                    <form action="{{ route('pc-components.update', $pc_component->pc_component_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Component Name Input -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                Component Name
                            </label>
                            <input type="text" name="pc_component_name" value=""
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full" required>
                        </div>

                        <!-- Component Type Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component Type</label>
                            <select name="component_type_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select Type</option>
                                @foreach ($pc_component_types as $type)
                                    <option value="{{ $type->component_type_id }}">{{ $type->component_type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Component Brand Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component Brand</label>
                            <select name="component_brand_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select Brand</option>
                                @foreach ($pc_component_brands as $brand)
                                    <option value="{{ $brand->component_brand_id }}">{{ $brand->component_brand_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Component Chipset Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component Chipset</label>
                            <select name="component_chipset_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select Chipset</option>
                                @foreach ($pc_component_chipsets as $chipset)
                                    <option value="{{ $chipset->component_chipset_id }}">{{ $chipset->component_chipset_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Component Form Factor Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component Form Factor</label>
                            <select name="component_form_factor_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select Form Factor</option>
                                @foreach ($pc_component_form_factors as $form_factor)
                                    <option value="{{ $form_factor->component_form_factor_id }}">{{ $form_factor->component_form_factor_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Component Socket Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component Socket</label>
                            <select name="component_socket_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select Socket</option>
                                @foreach ($pc_component_sockets as $socket)
                                    <option value="{{ $socket->component_socket_id }}">{{ $socket->component_socket_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Component RAM Type Dropdown -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Component RAM Type</label>
                            <select name="component_ram_type_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 rounded-md shadow-sm w-full">
                                <option value="" disabled selected>Select RAM Type</option>
                                @foreach ($pc_component_ram_types as $ram_type)
                                    <option value="{{ $ram_type->component_ram_type_id }}">{{ $ram_type->component_ram_type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
                                Update Component
                            </button>
                        </div>
                    </form>

                    <!-- Cancel Button -->
                    <div class="mt-4">
                        <a href="{{ route('view_components') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
                            Cancel
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
