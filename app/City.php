<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

  protected $fillable = ['city'];
  protected $table = 'cities';

  public function testimonials() {
    return $this->hasMany('App\Testimonial');
  }  

}
