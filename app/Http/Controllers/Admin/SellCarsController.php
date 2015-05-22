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
		return view('admin.sell-cars.index')->with('title', 'Sell Your Car Enquiries');
	}

	public function show(SelLCar $enquiry)
	{
		$city = City::getNameById($enquiry->city_id);
		return view('admin.sell-cars.view')->with(['title', 'View Sell Your Car Submission', 'enquiry' => $enquiry, 'city' => $city]);
	}

	public function destroy(SelLCar $enquiry)
	{
		$enquiry->delete();
		return redirect()->route('admin.sell-cars.index')->with('message', 'Enquiry deleted');
	}

	public function ajaxAll()
	{
		$enquiries = SelLCar::join('cities', 'sell_cars.city_id', '=', 'cities.id')
     				->select(['sell_cars.id as id', 'sell_cars.created_at as created_at',
     						  DB::raw('CONCAT(sell_cars.first_name, " ", sell_cars.surname) AS name'),
     						  	'cities.city as city'])     			
     				->orderBy('sell_cars.created_at' , 'desc');  

	    return Datatables::of($enquiries)	        
	         ->addColumn('delete',
	            '<form method="POST" action="/admin/sell-cars/{{$id}}" id="deleteForm{{$id}}");">
	             <input type="hidden" name="_token" value="{{ csrf_token() }}">
	             <input name="_method" type="hidden" value="DELETE">             
	             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
	            </form>')
	         ->editColumn('name','<a href="/admin/sell-cars/{{$id}}"><i class="fa fa-eye"></i> {{ $name }}</i></i></a>')
	         ->make(true);		

	}

}
