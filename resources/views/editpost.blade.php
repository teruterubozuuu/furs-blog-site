@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block font-semibold">Content</label>
            <textarea name="content" rows="6" class="w-full border rounded p-2" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Post</button>
    </form>
</div>
@endsection
