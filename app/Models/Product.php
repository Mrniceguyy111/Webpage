<?php

namespace App\Models;

use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",
        "price",
        "discount",
        "subscription_price",
        "is_active",
        "has_offer",
        "animal",
        "animal_category",
        "principal_image_path",
        "quantity"
    ];


    public function animal()
    {
        return $this->belongsTo(Animals::class, 'animal');
    }


    public function getAnimal()
    {
        return $this->belongsTo(Animals::class, 'animal');
    }

    public function getProductHasOffer()
    {
        return Product::where('is_active', 1)
            ->where('has_offer', 1)
            ->orWhere('discount', '>=', 1)
            ->get();
    }

    public function getLatestUploadedProducts($days)
    {
        $currentDate = Carbon::now();

        $sevenDaysAgo = $currentDate->subDays($days);

        return Product::where('is_active', 1)
            ->whereBetween('created_at', [$sevenDaysAgo, Carbon::now()])
            ->get();
    }

    public function getProductByAnimal($animal)
    {
        $animal = Animals::where('name', $animal)->first();

        if (!$animal) {
            return collect();
        }

        return Product::where('animal', $animal->id)
            ->where('is_active', 1)
            ->get();
    }



    public function getPriceWithDiscount()
    {
        if ($this->discount > 0) {

            if (Auth::check()) {
                switch (Auth::user()->subscription_level) {
                    case 1:
                        $calculate = ($this->price * $this->discount) / 100;

                        return number_format($this->price - $calculate, 0, ',', '.');
                        break;

                    case 2:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 15) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return number_format($finalPrice, 0, ',', '.');
                        break;
                    case 3:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 25) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return number_format($finalPrice, 0, ',', '.');
                        break;
                    case 4:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 30) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return number_format($finalPrice, 0, ',', '.');
                        break;
                    default:
                        $calculate = ($this->price * $this->discount) / 100;

                        return number_format($this->price - $calculate, 0, ',', '.');
                        break;
                }
            } else {
                $calculate = ($this->price * $this->discount) / 100;

                return number_format($this->price - $calculate, 0, ',', '.');
            }
        }
    }

    public function getCorrectPrice()
    {

        if (Auth::check()) {
            switch (Auth::user()->subscription_level) {
                case 1:
                    return number_format($this->price, 0, ',', '.');
                    break;

                case 2:
                    $calculate = ($this->price * 15) / 100;

                    $finalPrice = $this->price - $calculate;

                    return number_format($finalPrice, 0, ',', '.');
                    break;

                case 3:
                    $calculate = ($this->price * 25) / 100;

                    $finalPrice = $this->price - $calculate;

                    return number_format($finalPrice, 0, ',', '.');
                    break;

                case 4:
                    $calculate = ($this->price * 30) / 100;

                    $finalPrice = $this->price - $calculate;

                    return number_format($finalPrice, 0, ',', '.');
                    break;

                default:
                    $calculate = ($this->price * $this->discount) / 100;

                    return number_format($this->price - $calculate, 0, ',', '.');
                    break;
            }
        } else {
            $calculate = ($this->price * $this->discount) / 100;

            return number_format($this->price - $calculate, 0, ',', '.');
        }

        return number_format($this->price, 0, ',', '.');
    }

    public function getPriceWithDiscountSub()
    {
        if ($this->discount > 0) {

            if (Auth::check()) {
                switch (Auth::user()->subscription_level) {
                    case 1:
                        $calculate = ($this->price * $this->discount) / 100;

                        return $this->price - $calculate;
                        break;

                    case 2:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 15) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return $finalPrice;
                        break;
                    case 3:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 25) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return $finalPrice;
                        break;
                    case 4:
                        $calculate = ($this->price * $this->discount) / 100;
                        $subTotal = $this->price - $calculate;

                        $secondDiscount = ($subTotal * 30) / 100;
                        $finalPrice = $subTotal - $secondDiscount;

                        return $finalPrice;
                        break;
                    default:
                        $calculate = ($this->price * $this->discount) / 100;

                        return $this->price - $calculate;
                        break;
                }
            } else {
                $calculate = ($this->price * $this->discount) / 100;

                return $this->price - $calculate;
            }
        }
    }


    public function getPrice()
    {

        if (Auth::check()) {
            switch (Auth::user()->subscription_level) {
                case 1:
                    return $this->price;
                    break;

                case 2:
                    $calculate = ($this->price * 15) / 100;

                    $finalPrice = $this->price - $calculate;

                    return $finalPrice;
                    break;

                case 3:
                    $calculate = ($this->price * 25) / 100;

                    $finalPrice = $this->price - $calculate;

                    return $finalPrice;
                    break;

                case 4:
                    $calculate = ($this->price * 30) / 100;

                    $finalPrice = $this->price - $calculate;

                    return $finalPrice;
                    break;

                default:
                    $calculate = ($this->price * $this->discount) / 100;

                    return $this->price - $calculate;
                    break;
            }
        } else {
            $calculate = ($this->price * $this->discount) / 100;

            return $this->price - $calculate;
        }

        return $this->price;
    }

    public function getCategory()
    {
        return $this->belongsTo(AnimalsCategory::class, 'animal_category');
    }

    public function getDiscount()
    {
        if ($this->discount > 0) {
            return $this->discount . "%";
        } else if ($this->discount == 0) {
            return "No hay descuento";
        }
    }
    public function checkActive()
    {
        if ($this->is_active == 1) {
            return '✅';
        } else {
            return "⛔";
        }
    }
}
