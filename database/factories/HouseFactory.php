<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Street;

class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_id' => $this->faker->numberBetween(1, Street::count()),
            'unit_number' => $this->faker->numberBetween(1,100),
            'house_number' => $this->faker->numberBetween(444,999)
        ];
    }
}
