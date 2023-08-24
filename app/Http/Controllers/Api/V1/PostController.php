<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\{
    PostResource,
    PostCollection
};
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PostCollection(Post::all());
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return  new PostResource($post);
    }
}
