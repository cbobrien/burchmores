<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Testimonial;
use App\City;
use Illuminate\Http\Request;
use Datatables;
use View;

class TestimonialController extends Controller {

	public function index()
	{
		return view('admin.testimonial.index')->with('title', 'Testimonial');
	}

	public function create()
	{
		$cities = City::lists('city', 'id');	
		return view('admin.testimonial.create', compact('cities'));
	}

	public function store(TestimonialRequest $request)
	{
		Testimonial::create($request->all());
 		return redirect()->route('admin.testimonial.index')->with('message', 'Testimonial created');
	}

	public function edit(Testimonial $testimonial)		
	{
		$cities = City::lists('city', 'id');	
		return View::make('admin.testimonial.edit')->with('testimonial', $testimonial)->with('cities', $cities);
	}

	public function update(Testimonial $testimonial, TestimonialRequest $request)
	{
		$testimonial->update($request->all());
		return redirect()->route('admin.testimonial.index', $testimonial->id)->with('message', 'Testimonial updated');
	}

	public function destroy(Testimonial $testimonial)
	{
		$testimonial->delete();
		return redirect()->route('admin.testimonial.index')->with('message', 'Testimonial deleted');
	}

	public function ajaxAll()
	{
		$testimonials = Testimonial::select(['id', 'name', 'content', 'city']);
		 
		     // return Datatables::of($testimonials)
		     //     ->addColumn('edit', '<a href="/admin/testimonial/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		     //     ->addColumn('delete', '<form method="POST" action="/admin/testimonial/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		     //         <input type="hidden" name="_token" value="{{ csrf_token() }}">
		     //         <input name="_method" type="hidden" value="DELETE">             
		     //         <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		     //        </form>')
		     //     ->make(true);

		$testimonials = Testimonial::join('cities', 'testimonials.city_id', '=', 'cities.id')
		     ->select(['testimonials.id as id', 'testimonials.name as name', 'testimonials.content as content', 'testimonials.created_at as created_at','cities.city as city']);  

		     return Datatables::of($testimonials)
		         ->addColumn('edit', '<a href="/admin/testimonial/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		         ->addColumn('delete',
		            '<form method="POST" action="/admin/testimonial/{{$id}}" id="deleteForm{{$id}}");">
		             <input type="hidden" name="_token" value="{{ csrf_token() }}">
		             <input name="_method" type="hidden" value="DELETE">             
		             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		            </form>')
		         ->make(true);

	}

}
