<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index','show']);
    // }


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
        return view('post.create', [
            'post' => new Post(),
            'categories' => Category::get()
        ]);
    }

    public function store(PostRequest $request)
    {

        $attr = $request->all();

        $attr['slug'] = \Str::slug(request('title'));
        $attr['category_id'] = request('category');


        Post::create($attr);
        session()->flash('success', 'The post was created');
        // session()->flash('error', 'The post failed created');

        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
            'categories' => Category::get()
        ]);
    }

    public function update(PostRequest $request,  Post $post)
    {
        $attr = $request->all();
        $post->update($attr);

        session()->flash('success', 'The post was updated');
        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('success', 'The post was deleted');
        return redirect('posts');
    }
}
