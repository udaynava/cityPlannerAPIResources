<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\House::factory(25)->create();
    }
}
