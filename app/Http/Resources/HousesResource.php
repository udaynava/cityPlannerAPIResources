<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\StreetsResource;
use App\Models\Street;
use Illuminate\Http\Request;
use Log;

class HousesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $streetAttributes = $this->street->toArray();
        
        return [
            'id' => $this->id,
            'type' => 'Full address',
            'attributes' => [
                'unit_number' => $this->unit_number,
                'house_number' => $this->house_number,
                'street_name' => $streetAttributes['street_name'],
                'postal_code' => $streetAttributes['postal_code']
            ]
        ];
    }
}
