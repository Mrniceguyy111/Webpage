<?php

namespace App\Models;

use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            ->get();
    }

    public function getLatestUploadedProducts($days)
    {
        // Obtener la fecha actual
        $currentDate = Carbon::now();

        // Restar 7 días a la fecha actual
        $sevenDaysAgo = $currentDate->subDays($days);

        // Consulta para obtener los productos
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

    public function getDiscount()
    {
        if ($this->discount > 0) {
            return $this->discount . "%";
        } else if ($this->discount == 0) {
            return "No hay descuento";
        }
    }

    public function getPriceWithDiscount()
    {
        if ($this->discount > 0) {
            $calculate = ($this->price * $this->discount) / 100;

            return number_format($this->price - $calculate, 0, ',', '.');
        }
    }

    public function getCorrectPrice()
    {
        return number_format($this->price, 0, ',', '.');
    }

    public function getCategory()
    {
        return $this->belongsTo(AnimalsCategory::class, 'animal_category');
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
