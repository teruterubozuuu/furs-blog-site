@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<div class="flex flex-wrap justify-center p-10">
    <div class="flex flex-col justify-center items-center max-w-200 w-100 space-y-3 shadow-sm rounded-sm p-5 bg-white">
        <form method="POST" class="p-8 w-full space-y-5">
            @csrf
            <h1 class="text-center font-bold text-[#2e7d32] text-xl">Create an account</h1>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="mt-1 p-1 block w-full rounded-sm bg-gray-100 shadow-sm focus:bg-gray-200 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 p-1 block w-full rounded-sm bg-gray-100 shadow-sm focus:bg-gray-200 focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-[#2e7d32] text-white py-2 px-4 rounded-md cursor-pointer transition-all ease-in hover:bg-[#356338]">Sign Up</button>
        </form>
    </div>
</div>
@endsection