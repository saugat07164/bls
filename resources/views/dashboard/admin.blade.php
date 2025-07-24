<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

  <div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
        <!-- Stats Cards -->
        <div class="bg-white rounded-2xl shadow p-4">
            <h2 class="text-sm text-gray-500">Total Sales</h2>
            <p class="text-2xl font-bold text-blue-600">NPR 1,20,000</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-4">
            <h2 class="text-sm text-gray-500">Active Clients</h2>
            <p class="text-2xl font-bold text-green-600">52</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-4">
            <h2 class="text-sm text-gray-500">Pending Jobs</h2>
            <p class="text-2xl font-bold text-yellow-600">7</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-4">
            <h2 class="text-sm text-gray-500">Net Profit</h2>
            <p class="text-2xl font-bold text-purple-600">NPR 45,000</p>
        </div>
    </div>

    <!-- Chart Placeholders -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">📈 View Sales Report</h3>
            <div class="h-40 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                [Sales Chart Placeholder]
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">💰 View Income Statement</h3>
            <div class="h-40 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                [Income Chart Placeholder]
            </div>
        </div>
    </div>

    <!-- Job Status and Quick Links -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">🛠 Development Job Status Report</h3>
            <div class="h-40 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                [Job Status Progress Placeholder]
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">⚡ Quick Actions</h3>
            <ul class="space-y-3 text-sm text-gray-600">
                <li><a href="#" class="hover:text-blue-600">➕ Add New Project</a></li>
                <li><a href="#" class="hover:text-blue-600">📄 View All Invoices</a></li>
                <li><a href="#" class="hover:text-blue-600">👥 Manage Users</a></li>
                <li><a href="#" class="hover:text-blue-600">⚙️ Settings</a></li>
            </ul>
        </div>
    </div>
</div>

</x-app-layout>
