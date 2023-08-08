<?php

namespace App\Http\Livewire\Backend;

use App\Models\Animals;
use App\Models\AnimalsCategory;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Shop extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public $product_id,
        $name,
        $slug,
        $price,
        $description,
        $discount,
        $is_active = 1,
        $has_offer = 0,
        $subscription_price,
        $animal,
        $quantity,
        $animal_category,
        $principal_image_path,
        $imagename,
        $second_image_path,
        $third_image_path,
        $fourth_image_path;

    public $modal = false;
    public $editing = false;

    protected $rules = [
        'name'                  => 'required|unique:products,name',
        'price'                 => 'required|numeric|gte:1000',
        'quantity'              => 'required|gte:1',
        'subscription_price'    => 'nullable|numeric|lte:1000',
        'discount'              => 'numeric|lte:100',
        'description'           => 'required',
        'animal'                => 'required',
        'animal_category'       => 'required',
        'imagename'             => 'required|image|max:65000|dimensions:min_width=500,min_height=500'
    ];

    public function render()
    {
        $this->authorize("viewAny", App\Models\Product::class);
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


    public function lastedOrders()
    {
        return view('livewire.backend.history.show');
    }

    public function store()
    {
        $this->validate();

        if ($this->imagename) {
            if ($this->principal_image_path) {
                Storage::disk("products")->delete($this->principal_image_path);
            }
            $this->principal_image_path = $this->imagename->store(null, "products");
        }

        Product::updateOrCreate(
            ["id" => $this->product_id],
            [
                "name" => $this->name,
                "slug" => Str::slug($this->name),
                "description" => $this->description,
                "price" => $this->price,
                "discount" => $this->discount,
                "quantity" => $this->quantity,
                "subscription_price" => $this->subscription_price,
                "is_active" => $this->is_active,
                "has_offer" => $this->has_offer,
                "animal" => $this->animal,
                "animal_category" => $this->animal_category,
                "principal_image_path" => $this->principal_image_path,
            ]
        );

        $this->closeModal();
        $this->editing = false;
        return session()->flash(
            "message",
            $this->product_id ? "¡Actualización exitosa!" : "¡Creacion Exitosa!"
        );
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
        $this->quantity = $product->quantity;
        $this->subscription_price = $product->subscription_price;
        $this->discount = $product->discount;
        $this->description = $product->description;
        $this->is_active = $product->is_active;
        $this->has_offer = $product->has_offer;

        $this->animal = $product->animal;
        $this->animal_category = $product->animal_category;


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
