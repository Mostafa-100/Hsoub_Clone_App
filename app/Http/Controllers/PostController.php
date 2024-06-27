<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $show_last_comments = false;
        $this_post = true;
        $comments = Comment::all();

        return view('post-page.main', compact('show_last_comments', 'this_post', 'post', 'comments'));
    }

    public function create()
    {
        $show_last_comments = true;
        $communities = Community::all();
        $first_community = Community::first();

        return view('add-post-page.main', compact('show_last_comments', 'communities', 'first_community'));
    }

    public function store()
    {
        $validated = request()->validate([
            'chosen_community' => 'required|exists:communities,id',
            'post-title' => 'required|min:5',
            'content' => 'required|min:5',
        ]);

        $post = new Post();

        $post->title = $validated['post-title'];
        $post->content = $validated['content'];
        $post->user_id = auth()->id();
        $post->community_id = $validated['chosen_community'];
        $post->unknown = request()->has('unknown');

        $post->save();

        return redirect()->route('main.show');
    }
}
