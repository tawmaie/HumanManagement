<style>
    .sidebar-gradient {
        background: linear-gradient(45deg, #7B1FA2, #FF0000); /* Gladious Purple to Red */
    }
</style>
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 sidebar-gradient" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <div class="flex items-center justify-between mb-10">
            <a href="#" class="text-2xl font-bold text-gray-900 dark:text-white">HR Management System</a>
            <button id="sidebar-toggle" class="text-gray-500 dark:text-gray-400 focus:outline-none hover:text-gray-900 dark:hover:text-white">
            </button>
        </div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('employee.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-users"></i>
                    <span class="ms-3">Employees</span>
                </a>
            </li>
        </ul>
    </div>
</aside>