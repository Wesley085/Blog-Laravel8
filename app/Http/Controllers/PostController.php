<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            // 'title' => $post->title,
            'title' => $post->slug,
        ]);
    }
}
