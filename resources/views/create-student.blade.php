<x-layout>
    <x-slot:title>Add New Student</x-slot>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-center mb-6">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="form-group mb-4">
                <label for="grade" class="block text-sm font-medium text-gray-700">Grade:</label>
                <input type="text" name="grade" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="form-group mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <input type="text" name="address" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-500 transition duration-200">Save Student</button>
        </form>
    </div>
</x-layout>
