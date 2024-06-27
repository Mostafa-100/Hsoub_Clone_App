<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
            'content' => 'required|min:5',
            'post_id' => 'required|exists:posts,id',
        ]);

        $comment = new Comment();

        $comment->content = $validated['content'];
        $comment->unknown = request()->has('unknown');
        $comment->post_id = $validated['post_id'];
        $comment->user_id = auth()->id();

        $comment->save();

        return redirect()->route('posts.show', $validated['post_id']);
    }
}
