<?php

namespace App\Http\Controllers;

use App\Models\{
    Animals,
    AnimalsCategory,
    Product,
    Post,
};

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function coomingSoon()
    {
        return view('coomingsoon');
    }

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

    public function helpCenter()
    {
        return view('website.theme-1.help', [
            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }

    public function workUs()
    {
        return view('website.theme-1.work-us', [
            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }
    public function faq()
    {
        return view('website.theme-1.faq', [
            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }

    public function memberships()
    {
        return view('website.theme-1.membership', [
            "animals" => Animals::all(),
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }

    public function aboutHatchi()
    {
        $hatchi = Jetstream::localizedMarkdownPath('hatchi.md');

        return view('about-hatchi', [
            'hatchi' => Str::markdown(file_get_contents($hatchi)),
        ]);
    }
    public function delivery()
    {
        $delivery = Jetstream::localizedMarkdownPath('delivery.md');

        return view('delivery', [
            'delivery' => Str::markdown(file_get_contents($delivery)),
        ]);
    }
}
