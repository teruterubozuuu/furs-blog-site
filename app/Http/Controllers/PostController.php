<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show all posts on homepage
    public function index()
    {
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    // Show add post form
    public function create()
    {
        return view('addpost');
    }

    // Handle post creation
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($validated);

        // Redirect to home page after creating post
        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('editpost', compact('post'));
    }

    // Handle update
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($validated);

        return redirect()->route('home')->with('success', 'Post updated successfully!');
    }

    // Handle delete
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('home')->with('success', 'Post deleted successfully!');
    }
}
