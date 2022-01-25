<?php

namespace Database\Factories;

use App\Models\Street;
use Illuminate\Database\Eloquent\Factories\Factory;

class StreetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Street::class;

    public function definition()
    {
        return [
              'street_name' => $this->faker->streetName,
              'postal_code' => $this->faker->postcode
        ];
    }
}
