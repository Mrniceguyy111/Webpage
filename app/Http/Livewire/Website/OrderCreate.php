<?php

namespace App\Http\Livewire\Website;

use App\Models\AnimalsCategory;
use App\Models\Order;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Http\Livewire\Website\Payment;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class OrderCreate extends Component
{
    public $order;
    public $apiKey,
        $merchant_id,
        $tx_value,
        $signatureString,
        $signature,
        $oldSignature,
        $referenceCode,
        $new_value,
        $currency,
        $transaction_state,
        $transaction_id;

    public function render(Request $request)
    {
        $this->apiKey = env('PAYU_API_KEY');
        $this->merchant_id = env('PAYU_MERCHANT_ID');
        $this->order = session('order');


        $this->referenceCode = $request->query('referenceCode');
        $this->tx_value = $request->query('TX_VALUE');
        $this->new_value = number_format($this->tx_value, 0, ',', '.');
        $this->currency = $request->query('currency');
        $this->transaction_state = $request->query('transactionState');
        $this->signatureString = "$this->apiKey~$this->merchant_id~$this->referenceCode~$this->new_value~$this->currency~$this->transaction_state";
        $this->signature = md5($this->signatureString);
        $this->oldSignature = $request->query('signature');
        $this->transaction_id = $request->query('transactionId');

        // Actualiza la orden
        Order::updateOrCreate(
            ['id' => $this->order->id],
            [
                'status' => 'success',
                'transaction_id' => $this->transaction_id,
            ]
        );

        // Edita la cantidad de stock de cada producto
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            $product->quantity = $product->quantity - $item->qty;
            $product->save();
        }

        // Actualiza fecha y cantidad de compras de usuario
        User::updateOrCreate(
            ['id' => Auth::user()->id],
            [
                'last_purchase' => Carbon::now(),
                'total_purchases' => Auth::user()->total_purchases += 1,
            ],
        );

        // Destruye todos los registros del cache
        Cart::destroy();
        $request->session()->forget('order');

        return view('livewire.website.payment.success', [
            "animalCategory" => AnimalsCategory::all(),
        ])->extends('template', ["animalCategory" => AnimalsCategory::all()]);
    }
}
