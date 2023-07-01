<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.backend.blog.view', [
            'posts' => Post::latest()->paginate(9)
        ]);
    }
}
