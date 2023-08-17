<?php

namespace App\Http\Livewire\Website;

use App\Models\Animals;
use App\Models\AnimalsCategory;
use App\Models\Subscription;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Subscriptions extends Component
{
    public function render()
    {
        return view('livewire.website.membership.view', [
            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ])->extends('template', ["animalCategory" => AnimalsCategory::all()]);
    }

    public function addCart($id)
    {

        $subscription = Subscription::find($id);

        Cart::add($subscription->id, $subscription->name, 1, $subscription->price_year, [
            'image' => $subscription->principal_image_path,
        ]);


        return redirect()->back()->with("message", "¡Producto agregado al carrito!");
    }
}
