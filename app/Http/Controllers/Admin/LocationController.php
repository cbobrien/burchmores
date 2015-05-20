<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LocationRequest;
use App\Location;
use App\City;
use Illuminate\Http\Request;
use Datatables;
use View;

class LocationController extends Controller {

	public function index()
	{
		return view('admin.location.index')->with('title', 'Locations');
	}

	public function create()
	{
		$cities = City::lists('city', 'id');	
		// dd($cities);
		return view('admin.location.create', compact('cities'));
	}

	public function store(LocationRequest $request)
	{
		// dd($request);	
		Location::create($request->all());
 		return redirect()->route('admin.location.index')->with('message', 'Location created');
	}

	public function edit(Location $location)		
	{
		$cities = City::lists('city', 'id');		
		return View::make('admin.location.edit')->with('location', $location)->with('cities', $cities);
	}

	public function update(Location $location, LocationRequest $request)
	{
		$location->update($request->all());
		return redirect()->route('admin.location.index')->with('message', 'Location updated');
	}

	public function destroy(Location $location)
	{
		$location->delete();
		return redirect()->route('admin.location.index')->with('message', 'Location deleted');
	}

	public function ajaxAll()
	{

		$locations = Location::select(['id', 'city_id', 'address', 'longitude', 'latitude', 'telephone']);

		     // return Datatables::of($locations)
		     //     ->addColumn('edit', '<a href="/admin/location/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		     //     ->addColumn('delete', '<form method="POST" action="/admin/location/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		     //         <input type="hidden" name="_token" value="{{ csrf_token() }}">
		     //         <input name="_method" type="hidden" value="DELETE">             
		     //         <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		     //        </form>')
		     //     ->make(true);	

$locations = Location::join('cities', 'locations.city_id', '=', 'cities.id')
     ->select(['locations.id as id', 'locations.name as name', 'locations.address as address', 'locations.longitude as longitude', 'locations.latitude as latitude', 'locations.telephone as telephone', 'locations.created_at as created_at','cities.city as city']);  

     return Datatables::of($locations)
         ->addColumn('edit', '<a href="/admin/location/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
         ->addColumn('delete',
            '<form method="POST" action="/admin/location/{{$id}}" id="deleteForm{{$id}}");">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input name="_method" type="hidden" value="DELETE">             
             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
            </form>')
         ->make(true);

	}

}
