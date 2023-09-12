<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'document' => $this->document,
            'document_type' => $this->document_type,
            'is_verified' => $this->is_verified,
            'profile_photo_path' => $this->profile_photo_path,
            'hatchi_coins' => $this->hatchi_coins,
            'last_purchase' => $this->last_purchase,
            'total_purchases' => $this->total_purchases,
            'subscription_level' => $this->subscription_level,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
