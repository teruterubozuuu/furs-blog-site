@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
<div class="flex flex-wrap justify-center py-8  gap-8">
   <div class="flex flex-col justify-center space-y-3 shadow-sm rounded-sm h-70 p-4 max-w-100 w-70 max-h-50 bg-white">
        <form method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Sign In</button>
        </form>
    </div>
</div>
@endsection