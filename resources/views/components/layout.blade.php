<div class="flex w-full min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white p-4">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="{{ route('dashboard') }}" class="text-blue-400">Dashboard</a></li>
            <li><a href="{{ route('settings') }}" class="text-blue-400">Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        {{ $slot }}  <!-- Dynamic content will be inserted here -->
    </main>
</div>