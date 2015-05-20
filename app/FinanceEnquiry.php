<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinanceEnquiry extends Model {

	protected $table = 'finance_enquiries';
  protected $fillable = ['city_id', 'first_name', 'surname', 'telephone', 'work_telephone', 'email', 'requirements', 'comments'];

}
