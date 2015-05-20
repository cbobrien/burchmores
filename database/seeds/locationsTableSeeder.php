<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Location;

class locationsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('locations')->delete();
        Location::create(['name' => 'Burchmores Cape Town' , 'city_id' => 1]);
        Location::create(['name' => 'Burchmores Durban' , 'city_id' => 2]);
        Location::create(['name' => 'Burchmores Johannesburg' , 'city_id' => 3]);
    }

}