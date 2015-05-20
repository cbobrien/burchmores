<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Enquiry;
use Illuminate\Http\Request;
use Datatables;
use View;

class EnquiriesController extends Controller {

	public function index()
	{
		return view('admin.enquiries.index')->with('title', 'Enquiries');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function show()
	{
		//
	}

	public function destroy(Enquiry $enquiry)
	{
		$enquiry->delete();
		return redirect()->route('admin.enquiries.index')->with('message', 'Enquiry deleted');
	}

	public function ajaxAll()
	{

		$enquiries = Enquiry::select(['id', 'first_name', 'surname', 'telephone', 'email', 'message']);
		 
		     return Datatables::of($enquiries)
		         ->addColumn('edit', '<a href="/admin/enquiry/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		         ->addColumn('delete', '<form method="POST" action="/admin/faq/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		             <input type="hidden" name="_token" value="{{ csrf_token() }}">
		             <input name="_method" type="hidden" value="DELETE">             
		             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		            </form>')
		         ->make(true);		
	}	

}
