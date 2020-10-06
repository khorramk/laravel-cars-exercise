<?php

namespace Database\Seeders;

use App\Models\Cars;
use Database\Factories\CarsFactory;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Cars::factory()->times(5)->create();
    }
}
