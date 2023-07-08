<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postCategory, Post $post)
    {
        return view('post.show', [
            'category' => $postCategory,
            'post' => $post
        ]);
    }
}
