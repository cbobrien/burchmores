<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  protected $fillable = ['name' , 'city_id' , 'address', 'longitude', 'latitude', 'telephone'];
  protected $table = 'locations';

}
