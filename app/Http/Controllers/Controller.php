<?php

namespace App\Http\Controllers;

use App\Models\{
    Animals,
    AnimalsCategory,
    Product,
    Post,
};

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $email;
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

    public function sendEmail(Request $request)
    {
        $name = $request->get('name');
        $this->email = $request->get('email');

        Mail::send('emails.welcome', ['name' => $name, 'correo' => $this->email], function ($message) {
            $message->from('info@hatchi.com.co', 'Info Hatchi');
            $message->to($this->email, 'Cliente Hatchi');
            $message->subject('¡Pronto tendras mas informacion sobre Hatchi!');
        });

        return redirect()->route('home');
    }

    public function workUs()
    {

        Mail::send('emails.welcome', [], function ($message) {
            $message->from('info@hathi.com.co', 'Hatchi Colombia!');
            $message->to('julir2772@gmail.com', 'Recipient Name');
            $message->subject('Welcome!');
        });

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
