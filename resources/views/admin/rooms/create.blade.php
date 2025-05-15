@extends('admin.layout')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow mt-6">
    <h1 class="text-2xl font-bold mb-6">Add New Room</h1>

    <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Room Number --}}
        <div class="mb-4">
            <label for="room_number" class="block text-sm font-medium text-gray-700">Room Number</label>
            <input type="text" name="room_number" id="room_number" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring focus:ring-indigo-200 focus:outline-none">
        </div>

        {{-- Room Type --}}
        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <select name="type" id="type" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2">
                <option value="">Select Type</option>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="luxury">Luxury</option>
            </select>
        </div>

        {{-- Price --}}
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" id="price" required step="0.01"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2">
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2">
                <option value="">Select Status</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>

        {{-- Description --}}
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2"></textarea>
        </div>

        {{-- Image --}}
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                class="mt-1 block w-full text-sm text-gray-500 file:border file:border-gray-300 file:rounded-md file:px-4 file:py-2">
        </div>

        {{-- Submit --}}
        <div class="flex justify-end">
            <button type="submit"
                class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">
                Save Room
            </button>
        </div>
    </form>
</div>
@endsection
