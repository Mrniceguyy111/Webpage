<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'discount' => $this->discount,
            'product_with_discount' => $this->getPriceWithDiscount(),
            'quantity' => $this->quantity,
            'is_active' => $this->is_active,
            'has_offer' => $this->has_offer,
            'animal' => $this->getAnimal->name,
            'animal_category' => $this->getCategory->name,
            'created_at' => $this->created_at,
        ];
    }
}
