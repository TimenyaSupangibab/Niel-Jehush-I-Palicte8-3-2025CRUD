<div x-data="{ expanded: true }" class="relative min-h-screen bg-gray-800 text-white"
    :class="expanded ? 'w-96' : 'w-20'">
    
    <div class="p-4 text-lg font-bold flex items-center justify-between">
        <span x-show="expanded">{{ config('app.name', 'PCPartBuilder') }}</span>
        <button @click="expanded = !expanded" class="p-2 rounded bg-gray-700 hover:bg-gray-600">
            <span x-show="expanded">←</span>
            <span x-show="!expanded">→</span>
        </button>
    </div>

    <nav class="mt-4">
        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">
            <span x-show="expanded">Dashboard</span>
            <span x-show="!expanded">🏠</span>
        </a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">
            <span x-show="expanded">Profile</span>
            <span x-show="!expanded">👤</span>
        </a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">
            <span x-show="expanded">Settings</span>
            <span x-show="!expanded">⚙</span>
        </a>
    </nav>
</div>