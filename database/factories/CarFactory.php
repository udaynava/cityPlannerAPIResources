<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id' => $this->faker->unique()->numberBetween(1,House::count()),
            'license_plate' => $this->faker->unique()->bothify('#######'),
            'make' => $this->faker->randomKey($array = ['ford', 'chevy', 'benz', 'audi', 'bwm']),
            'color' => $this->faker->hexColor()
        ];
    }
}