<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FinanceEnquiryRequest;
use App\FinanceEnquiry;

class FormsController extends Controller {

	public function financeEnquiry(FinanceEnquiryRequest $request)
	{
		FinanceEnquiry::create($request->all());
		return redirect()->route('pages.thanks')->with('message', 'Thank you for your enquiry');
	}
}
