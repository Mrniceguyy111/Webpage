<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\{
    Address,
    User,
    subscription,
};


class DefaultController extends Controller
{



    public function index()
    {



        $user = User::find(Auth::id());

        $address = Address::where('user_id', $user->id)->get();
        $subscription = $user->subscription;

        return view('dashboard', [
            'address' => $address,
            'subscription' => $subscription,
        ]);
    }
}
