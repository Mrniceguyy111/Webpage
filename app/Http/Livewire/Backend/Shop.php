<?php

namespace App\Http\Livewire\Backend;

use App\Models\Animals;
use App\Models\AnimalsCategory;
use App\Models\Images;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Contracts\Cache\Store;

use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Shop extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;


    // Uploads variable's
    public $uploads = [],
        $product,
        $images,
        $files = [];

    public $product_id,
        $name,
        $slug,
        $price,
        $description,
        $discount,
        $is_active = 1,
        $has_offer = 0,
        $animal,
        $quantity,
        $animal_category;

    public $modal = false;
    public $editing = false;



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

    // Function validate
    public function rules()
    {
        $this->validate([
            'name' => "required|unique:products,name,{$this->product_id}",
            'price'                 => 'required|numeric|gte:1000',
            'quantity'              => 'required|gte:1',
            'discount'              => 'numeric|lte:100',
            'description'           => 'required',
            'animal'                => 'required',
            'animal_category'       => 'required',
            'imagename'             => 'required|max:2048|dimensions:min_width=500,min_height=500'
        ]);
    }

    public function updateFiles()
    {
        $this->uploads = $this->files;
    }



    public function store()
    {

        $this->rules();

        try {


            // Create new product
            $this->product = Product::updateOrCreate(
                ["id" => $this->product_id],
                [
                    "name" => $this->name,
                    "slug" => Str::slug($this->name),
                    "description" => $this->description,
                    "price" => $this->price,
                    "discount" => $this->discount,
                    "quantity" => $this->quantity,
                    "is_active" => $this->is_active,
                    "has_offer" => $this->has_offer,
                    "animal" => $this->animal,
                    "animal_category" => $this->animal_category
                ]
            );

            // Get all the files and then push them to to S3 in AWS

            if ($this->uploads) {
                foreach ($this->uploads as $file) {
                    $storage = Storage::disk('s3')->put('products/' . $this->product->id, $file, 'public');
                    $this->images = Images::create([
                        'url' => Storage::disk('s3')->url($storage),
                        'name' => $this->product->name,
                        'product_id' => $this->product->id,
                    ]);
                }
            }

            $this->closeModal();
            $this->editing = false;
            return session()->flash(
                "message",
                $this->product_id ? "¡Actualización exitosa!" : "¡Creacion Exitosa!"
            );
        } catch (\Exception $e) {
            $this->closeModal();
            return session()->flash(
                "error",
                "No se pudo registrar el producto. Error: <br>" . $e->getMessage()
            );
        }
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
        $this->discount = $product->discount;
        $this->description = $product->description;
        $this->is_active = $product->is_active;
        $this->has_offer = $product->has_offer;

        $this->animal = $product->animal;
        $this->animal_category = $product->animal_category;


        $this->openModal();
    }

    public function delete($id)
    {
        // Delete image
        Images::where('product_id', $id)->delete();
        // Delete product
        Product::find($id)->delete();

        return session()->flash("message", "Registro elimnado correctamente");
    }
}
