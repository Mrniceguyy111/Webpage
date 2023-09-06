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

        if ($product->discount > 0) {
            Cart::add($product->id, $product->name, 1, $product->getPriceWithDiscountSub(), [
                'image' => $product->getFirstImage($product->id),
            ]);
        } else {
            Cart::add($product->id, $product->name, 1, $product->getPrice(), [
                'image' => $product->getFirstImage($product->id),
            ]);
        }


        return redirect()->back()->with("message", "¡Producto agregado al carrito!");
    }

    public function render()
    {
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
