<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
            [
                'data' => $this->collection,
                'meta' => [
                    'organization' => 'Hatchi',
                    'authors' => [
                        'CoMMArka Studios',
                        'contacto@commarka.app',
                        // Agrega informacion de futuros Devs
                    ],
                    'type' => 'orders'
                ]
            ];
    }
}
