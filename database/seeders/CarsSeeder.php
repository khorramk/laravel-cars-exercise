<?php

namespace Database\Seeders;

use App\Models\Cars;
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

        DB::table('cars')->insert($data);
    }
}
