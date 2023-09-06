<?php

namespace App\Http\Livewire\Website;

use App\Models\{
    Address,
    Animals,
    AnimalsCategory,
    departamentsColombia,
    Order,
    Post,
    Product,
    User,
};
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Ramsey\Uuid\Type\Time;

class Payment extends Component
{

    // check hasAddreses
    public $hasAddreses = false;

    // Form address
    public
        $id_address,
        $address,
        $city;

    // Orden
    public
        $order,
        $order_id,
        $user_id,
        $order_date,
        $status,
        $value,
        $reference,
        $payu_order_id,
        $transaction_id;

    // Cart info
    public $totalPrice,
        $shippingPrice,
        $tax,
        $taxBase,
        $signatureString,
        $referenceCode,
        $signature;

    // View info page
    public
        $pageData = true,
        $pageAddresses = false,
        $pagePay = false;

    // PayU
    public
        $merchant_id,
        $tx_value,
        $new_value,
        $currency,
        $transaction_state;

    public $request_id,
        $btc_value,
        $pay_currency,
        $select_payment;


    public function setDataPayments()
    {
        // Shared variables
        $this->tax = str_replace(".", "", Cart::tax());
        $this->taxBase = str_replace(".", "", Cart::subtotal());
        $this->totalPrice = str_replace(".", "", Cart::total());

        // PayU Variables
        $this->referenceCode = Auth::user()->id . Auth::user()->total_purchases .  $this->totalPrice . rand(1, 1000);
        $this->signatureString = env('PAYU_API_KEY') . '~' . env('PAYU_MERCHANT_ID') . '~' . $this->referenceCode . '~' . $this->totalPrice . '~' . "COP";
        $this->signature = md5($this->signatureString);
    }

    public function trokeraRequest()
    {

        $this->currency = 'COP';

        $url = "https://trokera.com/api/getPaymentRequest";

        $headers = [
            'X-API-KEY' => env('TROKERA_API_KEY'),
            'SECRET-KEY' => env('TROKERA_SECRET_KEY'),
            'Content-type' => 'application/json',
        ];

        // When the payment currency is selected
        try {
            switch ($this->pay_currency) {
                case 'BTC':
                    $params = [
                        'currency' => $this->currency,
                        'amount' => $this->totalPrice,
                        'tax' => "0",
                        'description' => "Payment test",
                        'pay_currency' => "BTC"
                    ];

                    $response = Http::withHeaders($headers)->post($url, $params);

                    if ($response->ok()) {
                        $jsonTrokera = $response->json();
                        $this->request_id = $jsonTrokera["data"]["request_id"];
                        $this->btc_value = $jsonTrokera["data"]["btc_value"];
                    }
                    break;
                case 'USDT':
                    $params = [
                        'currency' => $this->currency,
                        'amount' => $this->totalPrice,
                        'tax' => "0",
                        'description' => "Payment test",
                        'pay_currency' => "USDT"
                    ];

                    $response = Http::withHeaders($headers)->post($url, $params);

                    if ($response->ok()) {
                        $jsonTrokera = $response->json();
                        // dd($jsonTrokera);
                        $this->request_id = $jsonTrokera["data"]["request_id"];
                        $this->btc_value = $jsonTrokera["data"]["btc"];
                    }

                    break;
                default:
                    echo "Ocurrio un error";
                    break;
            }
        } catch (\Throwable $th) {
            echo "Ocurrio un error";
        }
    }

    // Here the client can decide if pay with "BTC" or "USDT"

    public function trokeraPayment()
    {
        return $this->select_payment = true;
    }



    public function createOrder()
    {
        $this->order = Order::create([
            'user_id'           => Auth::user()->id,
            'status'            => 'pending',
            'value'             => $this->totalPrice,
            'reference'         => $this->referenceCode,
            'delivery_address'  => $this->id_address,
        ]);

        session(['order' => $this->order]);
    }

    public function page($page)
    {
        switch ($page) {
            case 'address':
                $this->pageData = false;
                $this->pagePay = false;
                $this->pageAddresses = true;
                break;
            case 'pay':
                $this->pageAddresses = false;
                $this->pageData = false;
                $this->pagePay = true;
                break;
            case 'info':
                $this->pageData = true;
                $this->pageAddresses = false;
                $this->pagePay = false;
                break;
            default:
                return abort(500);
                break;
        }
    }
    public function render()
    {

        if (Cart::content()->count() == 0) {
            abort(404);
        }
        $addreses = Address::where('user_id', Auth::user()->id)->get();

        if (!$addreses->isEmpty()) {
            $this->hasAddreses = true;
        } else {
            $this->hasAddreses = false;
        }

        $this->setDataPayments();


        return view('livewire.website.payment.datapayment', [
            "animalCategory" => AnimalsCategory::all(),
            "addreses" => $addreses,
            "departaments" => departamentsColombia::all(),
        ])->extends('template', ["animalCategory" => AnimalsCategory::all()]);
    }
    public function cancelCart()
    {
        Cart::destroy();
        return redirect()->route('home');
    }
    public function buy()
    {
        $this->createOrder();
    }


    public function tokeraCheckout()
    {
    }
}
