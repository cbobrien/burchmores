<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model {

  protected $fillable = ['first_name' , 'auction_id' , 'surname', 'telephone', 'email', 'message'];
  protected $table = 'enquiries';

}
