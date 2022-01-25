<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Log;

class StreetsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $carAttributes = $this->car->toArray();
        return [
            'id' => $carAttributes['id'],
            'type' => 'cars',
            'attributes' => [
                'license_plate' => $carAttributes['id'],
                'make' => $carAttributes['make'],
                'color' => $carAttributes['color']
            ]
        ];
    }
}
