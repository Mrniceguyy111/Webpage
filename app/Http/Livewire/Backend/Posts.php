<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class Posts extends Component
{

    public $post_id,
        $author_id,
        $title,
        $slug,
        $content,
        $category,
        $is_active;

    public $modal = false;
    public $editing = false;

    protected $rules = [
        'title'    => "required",
        'content'  => "required",
        'category' => "required",
    ];

    public function render()
    {
        return view('livewire.backend.blog.view', [
            'posts' => Post::latest()->paginate(9),
            'posts_category' => PostCategory::all()
        ]);
    }



    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function store()
    {
        $this->validate();


        Post::updateOrCreate(
            ["id" => $this->post_id],
            [
                "author_id" => Auth::user()->id,
                "title" => $this->title,
                "slug" => Str::slug($this->title),
                "content" => $this->content,
                "category" => $this->category,
                "is_active" => $this->is_active,
            ]
        );

        $this->closeModal();
        $this->editing = false;
        return session()->flash(
            "message",
            $this->post_id ? "¡Actualización exitosa!" : "¡Creacion Exitosa!"
        );
    }

    public function create()
    {
        $this->resetExcept("search");
        $this->openModal();
    }

    public function edit($id)
    {

        $this->resetExcept("search");
        $this->editing = true;
        $this->post_id = $id;
        $post = Post::findOrFail($id);
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->content = $post->content;
        $this->category = $post->category;
        $this->is_active = $post->is_active;
        $this->openModal();
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash("message", "Registro elimnado correctamente");
    }
}
