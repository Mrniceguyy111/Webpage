<?php

namespace App\Http\Livewire\Backend;

use App\Models\Animals;
use App\Models\AnimalsCategory;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;


class Shop extends Component
{

    use WithFileUploads;

    public $product_id,
        $name,
        $slug,
        $price,
        $description,
        $discount,
        $is_active,
        $subscription_price,
        $animal,
        $principal_image_path,
        $second_image_path,
        $third_image_path,
        $fourth_image_path;

    public $modal = false;
    public $editing = false;

    protected $rules = [
        //
    ];

    public function render()
    {
        return view('livewire.backend.shop.view', [
            'products' => Product::all(),
            'animals' => Animals::all(),
            'category_animals' => AnimalsCategory::all(),
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

    public function create()
    {
        $this->resetExcept("search");
        $this->openModal();
    }



    public function edit($id)
    {
        $this->resetExcept("search");
        $this->editing = true;
        $product = Product::findOrFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->is_active = $product->is_active;
        $this->subscription_price = $product->subscription_price;
        $this->animal = $product->animal;
        $this->principal_image_path = $product->principal_image_path;
        $this->second_image_path = $product->second_image_path;
        $this->third_image_path = $product->third_image_path;
        $this->fourth_image_path = $product->fourth_image_path;
        $this->openModal();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return session()->flash("message", "Registro elimnado correctamente");
    }
}
