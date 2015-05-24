<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EnquiryRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"auction_id" => "required",
			"first_name" => "required",
			"surname" => "required",
			"email" => "required|email",
			"telephone" => "required",
			"message" => 'required'
		];
	}

}
