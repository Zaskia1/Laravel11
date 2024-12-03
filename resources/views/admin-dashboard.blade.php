<x-dashboard>
    <x-main>
        <!-- Judul dan Deskripsi -->
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-4xl font-bold text-gray-800">Dashboard</h1>
            <p class="mt-2 text-lg text-gray-500">
                Welcome to the Dashboard! Manage your data efficiently here, including students, grades, and departments.
            </p>

            <!-- Card Grid -->
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 (Student) -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-600 text-white p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10h6M9 14h6m-3 4v-1a4 4 0 10-8 0v1" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-2xl font-semibold text-gray-800">Student</h2>
                    </div>
                    <p class="text-gray-600 mb-6">Manage student data here.</p>
                    <a href="/admin-student" class="block text-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition-colors duration-200">
                        Go to Student Page
                    </a>
                </div>

                <!-- Card 2 (Grade) -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-600 text-white p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-2xl font-semibold text-gray-800">Grade</h2>
                    </div>
                    <p class="text-gray-600 mb-6">Manage student grades here.</p>
                    <a href="/admin-grades" class="block text-center px-6 py-3 bg-green-600 text-white font-medium rounded-lg shadow-md hover:bg-green-700 transition-colors duration-200">
                        Go to Grade Page
                    </a>
                </div>

                <!-- Card 3 (Department) -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-600 text-white p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-2xl font-semibold text-gray-800">Department</h2>
                    </div>
                    <p class="text-gray-600 mb-6">Manage department data here.</p>
                    <a href="/admin-departments" class="block text-center px-6 py-3 bg-yellow-600 text-white font-medium rounded-lg shadow-md hover:bg-yellow-700 transition-colors duration-200">
                        Go to Department Page
                    </a>
                </div>

            </div>
        </div>
    </x-main>
</x-dashboard>
