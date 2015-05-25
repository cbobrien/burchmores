<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Enquiry;
use Illuminate\Http\Request;
use Datatables;
use View;
use DB;
use App\Auction;

class EnquiriesController extends Controller {

	public function index()
	{
		return view('admin.enquiries.index')->with('title', 'Enquiries');
	}

	public function show(Enquiry $enquiry)
	{
		$auction = Auction::find($enquiry->auction_id);		
		return view('admin.enquiries.view')->with(['title', 'View Auction Enquiry', 'enquiry' => $enquiry, 'auction' => $auction]);
	}

	public function destroy(Enquiry $enquiry)
	{
		$enquiry->delete();
		return redirect()->route('admin.enquiries.index')->with('message', 'Enquiry deleted');
	}

	public function ajaxAll()
	{

		$enquiries = Enquiry::join('auctions', 'enquiries.auction_id', '=', 'auctions.id')
					->join('locations', 'auctions.location_id', '=', 'locations.id')
     				->select(['enquiries.id as id', 'enquiries.created_at as created_at',
     						  DB::raw('CONCAT(enquiries.first_name, " ", enquiries.surname) AS name'),
     						  	'locations.name as location', 'auctions.auction_date as date'])     			
     				->orderBy('enquiries.created_at' , 'desc');  
		 
		     return Datatables::of($enquiries)		      
		         ->addColumn('delete', '<form method="POST" action="/admin/enquiries/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		             <input type="hidden" name="_token" value="{{ csrf_token() }}">
		             <input name="_method" type="hidden" value="DELETE">             
		             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		            </form>')
		          ->editColumn('name','<a href="/admin/enquiries/{{$id}}"><i class="fa fa-eye"></i> {{ $name }}</i></i></a>')
		         ->make(true);		
	}	

}
