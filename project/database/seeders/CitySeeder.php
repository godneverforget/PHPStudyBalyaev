<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::create(['name' => 'New York', 'population' => 8537673, 'country_id' => 1]);
        City::create(['name' => 'Los Angeles', 'population' => 3976322, 'country_id' => 1]);
        City::create(['name' => 'Toronto', 'population' => 2731571, 'country_id' => 2]);
        City::create(['name' => 'London', 'population' => 9304016, 'country_id' => 3]);
        City::create(['name' => 'Paris', 'population' => 2140526, 'country_id' => 4]);
    }
}
