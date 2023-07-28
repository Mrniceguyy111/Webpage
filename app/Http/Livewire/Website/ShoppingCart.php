<?php

namespace App\Http\Livewire\Website;

use App\Models\AnimalsCategory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cartItems;

    public function addCart($id)
    {
        $product = Product::findOrFail($id);

        Cart::add($product->id, $product->name, 2, $product->price, [
            'image' => $product->principal_image_path,
        ]);

        return redirect()->back()->with("message", "¡Producto agregado al carrito!");
    }

    public function mount()
    {
        $this->cartItems = Cart::content();
    }

    public function render()
    {
        return view('livewire.website.payment.show', [
            "animalCategory" => AnimalsCategory::all(),
            "cartItems" => $this->cartItems
        ])->extends('template');
    }


    public function test()
    {
        dd();
        return session()->flash("message", "¡Producto eliminado del carrito!");
    }
}
