@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @if (session('success'))
        <div id="toast-message" class="fixed top-5 left-1/2 transform -translate-x-1/2 z-50 bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded-lg shadow-md text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-wrap justify-center py-8 gap-8">
        @foreach($posts as $post)
            <div class="flex flex-col justify-center space-y-3 shadow-sm rounded-md p-4 w-80 bg-white">
                <p class="font-semibold text-lg">{{ $post->title }}</p>
                <p class="text-gray-700">{{ $post->content }}</p>
                <p class="text-sm text-gray-500">Created at: {{ $post->created_at->format('M d, Y h:i A') }}</p>

                <!-- Buttons -->
    <div class="flex justify-between items-center pt-2 border-t mt-2">
        <a href="{{ route('editpost', $post) }}" class="text-blue-500 hover:underline text-sm">Edit</a>

<form action="{{ route('deletepost', $post) }}" method="POST" onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
</form>

    </div>
            </div>


        @endforeach
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-message');
            if (toast) {
                toast.style.display = 'none';
            }
        }, 3000);
    </script>

@endsection
