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

use function Laravel\Prompts\error;

class OrderCreate extends Component
{
    public $order;
    public $apiKey,
        $merchant_id,
        $tx_value,
        $tx_state,
        $signatureString,
        $signature,
        $oldSignature,
        $referenceCode,
        $new_value,
        $currency,
        $transaction_state,
        $transaction_id;


    public function mount(Request $request)
    {
        $this->apiKey = env('PAYU_API_KEY');
        $this->merchant_id = env('PAYU_MERCHANT_ID');
        $this->order = session('order');


        $this->referenceCode = $request->query('referenceCode');
        $this->tx_value = $request->query('TX_VALUE');
        $this->new_value = number_format($this->tx_value, 1, '.', '');
        $this->currency = $request->query('currency');
        $this->transaction_state = $request->query('transactionState');
        $this->signatureString = "$this->apiKey~$this->merchant_id~$this->referenceCode~$this->new_value~$this->currency~$this->transaction_state";
        $this->signature = md5($this->signatureString);
        $this->oldSignature = $request->query('signature');
        $this->transaction_id = $request->query('transactionId');


        switch ($this->transaction_state) {
            case 4:

                Order::updateOrCreate(
                    ['id' => $this->order->id],
                    [
                        'status' => 'success',
                        'transaction_id' => $this->transaction_id,
                    ]
                );

                foreach (Cart::content() as $item) {
                    $product = Product::find($item->id);
                    $product->quantity = $product->quantity - $item->qty;
                    $product->save();
                }

                User::updateOrCreate(
                    ['id' => Auth::user()->id],
                    [
                        'last_purchase' => Carbon::now(),
                        'total_purchases' => Auth::user()->total_purchases += 1,
                    ],
                );
                break;

            case 6:
                Order::updateOrCreate(
                    ['id' => $this->order->id],
                    [
                        'status' => 'rejected',
                        'transaction_id' => $this->transaction_id,
                    ]
                );
                break;
            case 104:
                break;
            case 7:
                Order::updateOrCreate(
                    ['id' => $this->order->id],
                    [
                        'transaction_id' => $this->transaction_id,
                    ]
                );
                break;
            default:
                return abort(500);
                break;
        }
    }

    public function render()
    {
        if (strtoupper($this->oldSignature) == strtoupper($this->signature)) {
            return view('livewire.website.payment.success', [
                "animalCategory" => AnimalsCategory::all(),
            ])->extends('template', ["animalCategory" => AnimalsCategory::all()]);
        } else {
            return abort(403);
        }
    }
}
