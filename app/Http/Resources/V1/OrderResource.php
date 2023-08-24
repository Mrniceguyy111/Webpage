<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_date' => $this->order_date,
            'status' => $this->status,
            'delivery_address' => $this->delivery_address,
            'delivery' => [
                'city' => $this->address->city,
                'state' => $this->address->state,
                'address' => $this->address->address,
            ],
            'reference' => $this->reference,
            'transaction_id' => $this->transaction_id,
            'Author' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
        ];
    }
}
