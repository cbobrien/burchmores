<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

  protected $fillable = ['name' , 'content', 'city_id'];
  protected $table = 'testimonials';

  public function city() {
    return $this->belongsTo('App\City');
  }

}
