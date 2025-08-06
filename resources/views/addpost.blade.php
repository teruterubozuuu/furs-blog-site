@extends('layouts.app')

@section('title', 'Add Post')

@section('content')
<div class="flex flex-wrap justify-center p-10">
    <div class="flex flex-col justify-center items-center max-w-200 w-130 space-y-3 shadow-sm rounded-sm p-5 bg-white">

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative w-full">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('addpost.submit') }}" class="p-3 w-full space-y-5">
            @csrf
            <h1 class="text-center font-bold text-[#2e7d32] text-xl">Create a post</h1>

            <select name="post_type" class="rounded-full border border-[#356338] p-1 text-[#356338] focus:outline-none cursor-pointer">
                <option value="home">Home</option>
                <option value="devlog">Devlog</option>
            </select>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" required class="mt-1 p-1 block w-full rounded-sm bg-gray-200 shadow-sm focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-600">Content</label>
                <textarea name="content" id="content" required class="h-70 max-h-100 mt-1 p-1 block w-full rounded-sm bg-gray-200 shadow-sm focus:outline-none" placeholder="Write something..."></textarea>
            </div>

            <button type="submit" class="w-full bg-[#2e7d32] text-white py-2 px-4 rounded-md cursor-pointer transition-all ease-in hover:bg-[#356338]">
                Post
            </button>
        </form>
    </div>
</div>
@endsection
