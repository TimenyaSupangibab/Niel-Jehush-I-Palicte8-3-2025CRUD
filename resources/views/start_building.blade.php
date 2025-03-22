<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-gray-900 text-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Build Your PC</h1>

        <!-- CPU -->
        <div class="mb-4">
            <label for="cpu" class="block font-semibold">Processor (CPU)</label>
            <select id="cpu" class="w-full p-2 bg-gray-800 rounded" onchange="updatePrice()">
                <option value="0">Select a CPU</option>
                <option value="200">AMD Ryzen 5 5600X - $200</option>
                <option value="300">AMD Ryzen 7 5800X - $300</option>
            </select>
        </div>

        <!-- GPU -->
        <div class="mb-4">
            <label for="gpu" class="block font-semibold">Graphics Card (GPU)</label>
            <select id="gpu" class="w-full p-2 bg-gray-800 rounded" onchange="updatePrice()">
                <option value="0">Select a GPU</option>
                <option value="400">RTX 3060 - $400</option>
                <option value="600">RTX 3070 - $600</option>
            </select>
        </div>

        <!-- RAM -->
        <div class="mb-4">
            <label for="ram" class="block font-semibold">Memory (RAM)</label>
            <select id="ram" class="w-full p-2 bg-gray-800 rounded" onchange="updatePrice()">
                <option value="0">Select RAM</option>
                <option value="80">16GB DDR4 - $80</option>
                <option value="150">32GB DDR4 - $150</option>
            </select>
        </div>

        <!-- Storage -->
        <div class="mb-4">
            <label for="storage" class="block font-semibold">Storage (SSD/HDD)</label>
            <select id="storage" class="w-full p-2 bg-gray-800 rounded" onchange="updatePrice()">
                <option value="0">Select Storage</option>
                <option value="100">1TB NVMe SSD - $100</option>
                <option value="50">1TB HDD - $50</option>
            </select>
        </div>

        <!-- Storage -->
        <div class="mb-4">
            <label for="power_supply" class="block font-semibold">Power Supply (PSU)</label>
            <select id="power_supply" class="w-full p-2 bg-gray-800 rounded" onchange="updatePrice()">
                <option value="0">Select Power Supply</option>
                <option value="500">1000 Watt PSU - $500</option>
                <option value="250">750W Watt PSU - $250</option>
            </select>
        </div>

        <!-- Display Total Price -->
        <div class="p-4 bg-gray-800 rounded text-lg font-semibold">
            Total Price: <span id="totalPrice">$0</span>
        </div>

        <!-- Build Button -->
        <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Add to Build
        </button>
    </div>

    <script>
        function updatePrice() 
        {
            let cpu = parseInt(document.getElementById('cpu').value);
            let gpu = parseInt(document.getElementById('gpu').value);
            let ram = parseInt(document.getElementById('ram').value);
            let psu = parseInt(document.getElementById('power_supply').value);
            let storage = parseInt(document.getElementById('storage').value);

            let total = cpu + gpu + ram + storage + psu;
            document.getElementById('totalPrice').innerText = `$${total}`;
        }
    </script>
</x-app-layout>
