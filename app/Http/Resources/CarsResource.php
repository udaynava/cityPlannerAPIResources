<?php

namespace App\Http\Resources;

use Attribute;
use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => 'Car owners',
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'dob' => $this->dob,
                'sex' => $this->sex,
                'phone_number' => $this->phone_number
            ]
        ];
    }
}
