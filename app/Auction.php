<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	 protected $fillable = ['auction_date' , 'auction_time' , 'auction_type' , 'location_id', 'file_path'];

	 public function location()
	 {
	 	return $this->belongsTo('App\Location');
	 }

}
