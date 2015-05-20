<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\City;

class citiesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('cities')->delete();
        City::create(['city' => 'Johannesburg']);
        City::create(['city' => 'Cape Town']);
        City::create(['city' => 'Durban']);
    }

}