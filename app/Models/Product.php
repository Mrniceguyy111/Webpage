<?php

namespace App\Models;

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
        "animal",
        "animal_category",
        "principal_image_path",
    ];

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
