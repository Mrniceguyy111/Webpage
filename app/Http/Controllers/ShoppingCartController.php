<?php

namespace App\Http\Controllers;

use App\Models\AnimalsCategory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    // public function view()
    // {

    //     $cartItems = Cart::content();
    //     // dd($cartItems);
    //     return view('website.theme-1.payment.shopingcart', [
    //         "animalCategory" => AnimalsCategory::all(),
    //         "cartItems" => $cartItems
    //     ])->extends;
    // }

    // public function selectMethod()
    // {
    //     return view('website.theme-1.payment.paymentmethod');
    // }

    // public function addCart($id)
    // {
    //     $product = Product::findOrFail($id);

    //     Cart::add($product->id, $product->name, 2, $product->price, [
    //         'image' => $product->principal_image_path,
    //     ]);

    //     return redirect()->back()->with("message", "¡Producto agregado al carrito!");
    // }
}
