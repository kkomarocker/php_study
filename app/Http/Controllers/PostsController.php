<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest() -> get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $article)
    {

        return view('posts.show', compact('article'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // validate.
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        // create.

        $post = Post::create(request(['title', 'body']));

        // redirect to home.
        return redirect('/');
    }
}
