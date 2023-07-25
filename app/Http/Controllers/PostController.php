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
        return view('website.theme-1.post.posts', [
            'lastPost' => Post::latest()->first(),
            'category' => PostCategory::all(),
            'post' => Post::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }

    public function view($postCategory, Post $post)
    {
        return view('website.theme-1.post.show', [
            'category' => $postCategory,
            'post' => $post,
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }
    public function shoppingCart()
    {
        return view('website.theme-1.shop.shopingcart');
    }
}
