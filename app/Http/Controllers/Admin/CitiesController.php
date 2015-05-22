<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\City;
use Datatables;
use View;

use Illuminate\Http\Request;

class CitiesController extends Controller {

	public function index()
	{
		return view('admin.cities.index')->with('title', 'Cities');
	}

	public function create()
	{
		return view('admin.cities.create');
	}

	public function store(CityRequest $request)
	{
		City::create($request->all());
 		return redirect()->route('admin.cities.index')->with('message', 'City created');
	}

	public function edit(City $city)		
	{
		return view('admin.cities.edit')->with('city', $city);
	}

	public function update(City $city, CityRequest $request)
	{
		$city->update($request->all());
		return redirect()->route('admin.cities.index', $city->id)->with('message', 'City updated');
	}

	public function destroy(City $city)
	{
		$city->delete();
		return redirect()->route('admin.cities.index')->with('message', 'City deleted');
	}

	public function ajaxAll()
	{

		$cities = City::select(['id', 'city'])->orderBy('order', 'asc');
		 
		     return Datatables::of($cities)
		         ->addColumn('edit', '<a href="/admin/cities/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		         ->addColumn('delete', '<form method="POST" action="/admin/cities/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		             <input type="hidden" name="_token" value="{{ csrf_token() }}">
		             <input name="_method" type="hidden" value="DELETE">             
		             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		            </form>')		         
		         ->make(true);		
	}

}
