<?php

namespace App\Http\Controllers;

use App\Models\{
    Animals,
    AnimalsCategory,
    Product,
    Post,
};
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $products = new Product();

        return view('website.theme-1.index', [
            "productsInOffer" => $products->getProductHasOffer(),
            "lastUploadProducts" => $products->getLatestUploadedProducts(7),
            "lastPosts" => Post::latest()->paginate(3),
            "productsOfDogs" => $products->getProductByAnimal("perro"),
            "productsOfCat" => $products->getProductByAnimal("gato"),

            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }
}
