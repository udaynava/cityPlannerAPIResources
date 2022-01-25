<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\House;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $house = House::pluck('id')->toArray();
        return [
            'house_id' => $this->faker->randomElement($house),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'dob' => $this->faker->dateTimeBetween('1900-01-01', '2022-01-24')
            ->format('y/m/d'),
            'sex' => $this->faker->randomElement($array = array ('male', 'female')),
            'phone_number' => $this->faker->phoneNumber()
        ];
    }
}
