<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  protected $fillable = ['name' , 'city_id' , 'address', 'longitude', 'latitude', 'telephone'];
  protected $table = 'locations';

  public function auctions()
  {
  	 return $this->hasMany('App\Auction')
  	 				->where('auctions.auction_date', '>=', date('Y-m-d'))
  	 				->orderBy('auctions.auction_date', 'asc');
            // ->take(4);
  }

  public function city()
  {
  	return $this->belongsTo('App\City');
  }

}
