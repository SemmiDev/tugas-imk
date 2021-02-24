<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'posts' => Post::latest()->paginate(6)
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $validation = request()->validate([
            'title' => 'required|min:3|max:50',
            'body' => 'required'
        ]);

        $validation['slug'] = \Str::slug(request('title'));
        Post::create($validation);
        session()->flash('success', 'The post was created');

        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        dd('updated');
    }
}
