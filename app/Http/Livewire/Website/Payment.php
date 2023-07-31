<?php

namespace App\Http\Livewire\Website;

use App\Models\Address;
use App\Models\AnimalsCategory;
use App\Models\departamentsColombia;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Payment extends Component
{
    public $animalCategory;

    public $hasAddreses = false;

    public function render()
    {
        $addreses = Address::where('user_id', Auth::user()->id)->get();

        if (!$addreses->isEmpty()) {
            $this->hasAddreses = true;
        } else {
            $this->hasAddreses = false;
        }

        $this->animalCategory = AnimalsCategory::all();

        return view('livewire.website.payment.datapayment', [
            "animalsCategory" => $this->animalCategory,
            "addreses" => $addreses,
            "departaments" => departamentsColombia::all(),
        ])->extends('template', ["animalCategory" => $this->animalCategory]);
    }

    public function cancelCart()
    {
        Cart::destroy();
        return redirect()->route('home');
    }
}
