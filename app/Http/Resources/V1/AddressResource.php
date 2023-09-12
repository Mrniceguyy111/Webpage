<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'user_id' => $this->user_id,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'address' => $this->address,
            'other_info' => $this->other_info,
            'published_at' => $this->published_at,
            'created_at' => $this->created_at,
        ];
    }
}
