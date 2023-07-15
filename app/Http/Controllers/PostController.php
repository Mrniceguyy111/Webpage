<?php

namespace App\Http\Controllers;

use App\Models\AnimalsCategory;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('website.theme-1.post.posts');
    }

    public function show($postCategory, Post $post)
    {
        return view('website.theme-1.post.show', [
            'category' => $postCategory,
            'post' => $post,
            "animalsCategory" => AnimalsCategory::all(),
        ]);
    }
}
