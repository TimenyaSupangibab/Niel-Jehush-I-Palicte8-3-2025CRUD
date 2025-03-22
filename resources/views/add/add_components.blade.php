<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Components') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h3 class="text-lg font-bold">Add Components</h3>

                    <form action="{{ route('pc-components.store') }}" method="POST" class="mt-4">
                        @csrf

                        <!-- Socket Type Name Field -->
                        <div class="mb-4">
                            <label class="block text-white" for="pc_component_name">Component Name</label>
                            <input type="text" name="pc_component_name" id="pc_component_name" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="pc_component_price">Component Price</label>
                            <input type="number" name="pc_component_price" id="pc_component_price" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" step="0.01"
                            min="0" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_type_id">Component Type</label>
                            <select name="component_type_id" id="component_type_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" required>
                                <option value="" disabled selected>Select a Component Type</option>
                                @foreach ($component_types as $component_type)
                                    <option value="{{ $component_type->component_type_id }}">{{ $component_type->component_type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_brand_id">Component Brand</label>
                            <select name="component_brand_id" id="component_brand_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full" required>
                                <option value="" disabled selected>Select a Component Brand</option>
                                @foreach ($component_brands as $component_brand)
                                    <option value="{{ $component_brand->component_brand_id }}">{{ $component_brand->component_brand_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_socket_id">Component Socket: OPTIONAL</label>
                            <select name="component_socket_id" id="component_socket_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full">
                                <option value="" disabled selected>Select a Component Socket</option>
                                @foreach ($component_sockets as $component_socket)
                                    <option value="{{ $component_socket->component_socket_id }}">{{ $component_socket->component_socket_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_chipset_id">Component Chipsets: OPTIONAL</label>
                            <select name="component_chipset_id" id="component_chipset_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full">
                                <option value="" disabled selected>Select a Component Socket</option>
                                @foreach ($component_chipsets as $component_chipset)
                                    <option value="{{ $component_chipset->component_chipset_id }}">{{ $component_chipset->component_chipset_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_form_factor_id">Component Form Factor: OPTIONAL</label>
                            <select name="component_form_factor_id" id="component_form_factor_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full">
                                <option value="" disabled selected>Select a Component Form Factor</option>
                                @foreach ($component_form_factors as $component_form_factor)
                                    <option value="{{ $component_form_factor->component_form_factor_id }}">{{ $component_form_factor->component_form_factor_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white" for="component_ram_type_id">Component RAM Type: OPTIONAL</label>
                            <select name="component_ram_type_id" id="component_ram_type_id" class="border px-4 py-2 rounded bg-gray-700 text-gray-800 w-full">
                                <option value="" disabled selected>Select a Component RAM Type</option>
                                @foreach ($component_ram_types as $component_ram_type)
                                    <option value="{{ $component_ram_type->component_ram_type_id }}">{{ $component_ram_type->component_ram_type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Save Component
                        </button>
                        <a href="{{ route('view_socket_types') }}" class="ml-2 text-gray-300 hover:underline">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
