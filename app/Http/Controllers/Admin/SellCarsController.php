<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SellCar;
use DB;
use Datatables;
use App\City;

class SellCarsController extends Controller {

	public function index()
	{
		return view('admin.finance-enquiries.index')->with('title', 'Finance Enquiries');
	}

	public function show(SelLCar $enquiry)
	{
		$city = City::getNameById($enquiry->city_id);
		return view('admin.finance-enquiries.view')->with(['title', 'View Finance Enquiry', 'enquiry' => $enquiry, 'city' => $city]);
	}

	public function destroy(SelLCar $enquiry)
	{
		$enquiry->delete();
		return redirect()->route('admin.finance-enquiries.index')->with('message', 'Enquiry deleted');
	}

	public function ajaxAll()
	{
		$enquiries = SelLCar::join('cities', 'finance_enquiries.city_id', '=', 'cities.id')
     				->select(['finance_enquiries.id as id', 'finance_enquiries.created_at as created_at',
     						  DB::raw('CONCAT(finance_enquiries.first_name, " ", finance_enquiries.surname) AS name'),
     						  	'cities.city as city'])     			
     				->orderBy('finance_enquiries.created_at' , 'desc');  

	    return Datatables::of($enquiries)	        
	         ->addColumn('delete',
	            '<form method="POST" action="/admin/finance-enquiries/{{$id}}" id="deleteForm{{$id}}");">
	             <input type="hidden" name="_token" value="{{ csrf_token() }}">
	             <input name="_method" type="hidden" value="DELETE">             
	             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
	            </form>')
	         ->editColumn('name','<a href="/admin/finance-enquiries/{{$id}}"><i class="fa fa-eye"></i> {{ $name }}</i></i></a>')
	         ->make(true);		

	}

}
