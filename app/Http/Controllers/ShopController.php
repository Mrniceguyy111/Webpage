<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalsCategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function view(Animals $animals)
    {

        $product = Product::where('animal', $animals->id)
            ->where('is_active', 1)
            ->get();

        return view('website.theme-1.shop.view', [
            "animals" => $animals,
            "animalCategory" => AnimalsCategory::all(),
            "product" => $product
        ]);
    }

    public function category(Animals $animal, $animalCategory)
    {
        $category = AnimalsCategory::where('slug', $animalCategory)->first();

        $product = Product::where('animal', $animal->id)
            ->where('is_active', 1)
            ->where('animal_category', $category->id)
            ->get();

        return view('website.theme-1.shop.view', [
            "product" => $product,
            "animals" => $animal,
            "category" => $animalCategory,
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }


    public function product(Animals $animal, AnimalsCategory $animalCategory, Product $product)
    {
        $category = AnimalsCategory::where('slug', $animalCategory)->first();

        $product = Product::where('animal', $animal->id)
            ->where('is_active', 1)
            ->where('animal_category', $category->id)
            ->get();



        return view('website.theme-1.shop.view', []);
    }
}
