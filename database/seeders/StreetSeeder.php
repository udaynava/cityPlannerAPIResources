<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Street::factory(10)->create();
    }
}
