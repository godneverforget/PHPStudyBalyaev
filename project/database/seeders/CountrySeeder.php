<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run()
    {
        Country::create(['name' => 'USA']);
        Country::create(['name' => 'Canada']);
        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'France']);
        Country::create(['name' => 'Germany']);
    }
}
