<?php

use App\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        DB::table('cities')->insert([
            [
                'name' => 'Kathmandu',
            ],           
            [
                'name' => 'Lalitpur'
            ],
            [
                'name' => 'Damak'
            ],
            [
                'name' => 'Dhangadhi'
            ],
            [
                'name' => 'Rautahaht'
            ],
            [
                'name' => 'Bhadrapur'
            ],
            [
                'name' => 'Nepalgunj'
            ],
            [
                'name' => 'Damak'
            ],
            [
                'name' => 'Bhaktapur'
            ],
        ]);  
    }
}
