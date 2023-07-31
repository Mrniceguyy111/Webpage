<?php

namespace App\Http\Livewire\Website;


use App\Models\AnimalsCategory;
use App\Models\Product;

use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cartItems;
    public $quantity = 0;
    public $animalCategory; // Agregamos esta propiedad

    public function addCart($id)
    {
        $product = Product::findOrFail($id);

        Cart::add($product->id, $product->name, 1, $product->price, [
            'image' => $product->principal_image_path,
        ]);

        return redirect()->back()->with("message", "¡Producto agregado al carrito!");
    }

    public function render()
    {
        // Asignamos el valor de AnimalsCategory::all() a la propiedad $animalsCategory
        $this->animalCategory = AnimalsCategory::all();

        return view('livewire.website.payment.cart', [
            "animalsCategory" => $this->animalCategory,
        ])->extends('template', ["animalCategory" => $this->animalCategory]);
    }

    public function remove($id)
    {
        Cart::remove($id);
        return session()->flash("message", "¡Producto eliminado del carrito!");
    }
}
