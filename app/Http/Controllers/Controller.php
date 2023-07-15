<?php

namespace App\Http\Controllers;

use App\Models\AnimalsCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('website.theme-1.index', [
            "animalCategory" => AnimalsCategory::all(),
        ]);
    }
}
