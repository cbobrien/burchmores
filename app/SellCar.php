<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SellCar extends Model {

	protected $table = 'sell_cars';
	protected $fillable = ['city_id', 'first_name', 'surname', 'telephone', 'email',
							'make', 'model', 'year', 'mileage', 'colour', 'registration', 'comments',
							'image_path1', 'image_path2', 'image_path3', 'image_path4', 'image_path5',
							'comments'];

}
