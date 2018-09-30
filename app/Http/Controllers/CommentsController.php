<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function addComment(Post $article)
    {
        Comment::create([
            $body => request('body'),
            $post_id => $article -> id
        ]);

        return back();
    }
}
