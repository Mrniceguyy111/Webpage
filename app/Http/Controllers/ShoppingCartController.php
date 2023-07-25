<?php

namespace App\Http\Controllers;

use App\Models\AnimalsCategory;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function view()
    {
        return view('website.theme-1.payment.shopingcart', [
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }

    public function selectMethod()
    {
        return view('website.theme-1.payment.paymentmethod');
    }
}
