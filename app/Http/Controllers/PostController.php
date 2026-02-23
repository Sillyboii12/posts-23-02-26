<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create($validated);


        $title = $validated["title"];
        $content = $validated["content"];

        return view('posts.post', ['title' => $title, 'content' => $content]);
    }

    public function posts()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function view($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.view', compact('post'));
    }
}