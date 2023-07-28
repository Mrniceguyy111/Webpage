<?php

namespace App\Http\Livewire\Backend;

use App\Models\AnimalsCategory;
use Alexo\LaravelPayU\LaravelPayU;
use App\Models\Animals;
use Illuminate\Support\Str;
use Livewire\Component;

class SystemConfig extends Component
{
    public $error = false,
        $errorData = "",
        $editing = false;

    public $modal = false,
        $modalAnimals = false;

    public $rules = [
        "name" => "required"
    ];

    public $category_id,
        $name,
        $slug,
        $is_active;

    public function render()
    {
        // $this->checkPayU();
        return view('livewire.backend.config.view', [
            'animalsCategory' => AnimalsCategory::all(),
            'animals' => Animals::all(),
        ]);
    }

    public function openModalCategory()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }

    public function store()
    {
        // $this->validate();

        AnimalsCategory::updateOrCreate(
            ["id" => $this->category_id],
            [
                "name" => $this->name,
                "slug" => Str::slug($this->name),
                "is_active" => $this->is_active,
            ]
        );

        $this->closeModal();
        $this->editing = false;
        return session()->flash(
            "message",
            $this->category_id ? "¡Actualización exitosa!" : "¡Creacion Exitosa!"
        );
    }
    public function editCategory($id)
    {
        $this->resetExcept("search");
        $this->editing = true;
        $this->category_id = $id;

        $category = AnimalsCategory::findOrFail($id);
        $this->name = $category->name;
        $this->is_active = $category->is_active;
        $this->slug = $category->slug;

        $this->openModalCategory();
    }
    public function deleteCategory($id)
    {
        AnimalsCategory::find($id)->delete();
        return session()->flash("message", "Registro elimnado correctamente");
    }
}
