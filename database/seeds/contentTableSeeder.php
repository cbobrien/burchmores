<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Location;

class contentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('content')->delete();
        Content::create(['page' => 'Home']);
        Content::create(['page' => 'About']);
        Content::create(['page' => 'Video']);
    }

}