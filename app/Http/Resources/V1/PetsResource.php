<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetsResource extends JsonResource
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
            'owner_id' => $this->owner_id,
            'animal_id' => $this->animal_id,
            'race_id' => $this->race_id,
            'name' => $this->name,
            'slug_pet' => $this->slug_pet,
            'age' => $this->age,
            'weight' => $this->weight,
            'photo' => $this->photo,
            'is_vaccinated' => $this->is_vaccinated,
            'published_at' => $this->published_at,
            'created_at' => $this->created_at,
        ];
    }
}
