<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionRequest;
use App\Auction;
use Carbon;
use View;
use App\Location;
use Illuminate\Http\Request;
use Datatables;

class AuctionController extends Controller {

	public function index()
	{
		return view('admin.auction.index')->with('title', 'Auctions');
	}

	public function create()
	{
    $locations = Location::lists('name', 'id');    
		return view('admin.auction.create', compact('locations'));
	}

	public function store(AuctionRequest $request)
	{
    // dd($request);
    $data = $this->createDataArray($request);
       // dd( $data);
    
    $data['auction_date'] = Carbon::parse($request->input('auction_date'))->format('Y-m-d G:i');

	 Auction::create($data);
 		return redirect()->route('admin.auction.index')->with('message', 'Auction created');
	}

	public function edit(Auction $auction, AuctionRequest $request)		
	{
    $locations = Location::lists('name', 'id');   
    $request['auction_date'] = Carbon::parse($request->input('auction_date'))->format('Y-m-d G:i');
		return View::make('admin.auction.edit')->with(['auction'=>$auction, 'locations'=>$locations]);
	}

	public function update(Auction $auction, AuctionRequest $request)
	{
    $data = $this->createDataArray($request);
    // dd($data);
   
    $data['auction_date'] = Carbon::parse($request->input('auction_date'))->format('Y-m-d G:i');  
		$auction->update($data);
		return redirect()->route('admin.auction.index')->with('message', 'Auction created');
	}

	public function destroy(Auction $auction)
	{
		$auction->delete();
		return redirect()->route('admin.auction.index')->with('message', 'Auction deleted');
	}

	public function ajaxAll()
	{

		// $auctions = Location::select(['id', 'city_id', 'address', 'longitude', 'latitude', 'telephone']);

  //  	return Datatables::of($locations)
  //      ->addColumn('edit', '<a href="/admin/location/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
  //      ->addColumn('delete', '<form method="POST" action="/admin/location/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
  //          <input type="hidden" name="_token" value="{{ csrf_token() }}">
  //          <input name="_method" type="hidden" value="DELETE">             
  //          <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
  //         </form>')
  //      ->make(true);

		$auctions = Auction::join('locations', 'auctions.location_id', '=', 'locations.id')
     ->select(['auctions.id as id', 'auctions.auction_date as auction_date', 'auctions.auction_time as auction_time' , 'auctions.created_at as created_at' , 'locations.name as name'])
     ->orderBy('auctions.created_at' , 'desc');  

     return Datatables::of($auctions)
         ->addColumn('edit', '<a href="/admin/auctions/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
         ->addColumn('delete',
            '<form method="POST" action="/admin/auctions/{{$id}}" id="deleteForm{{$id}}");">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input name="_method" type="hidden" value="DELETE">             
             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
            </form>')
         ->make(true);		

	}

  protected function moveFile($file, $title)
   { 
       $fileName = $this->cleanInput($title) . '-' . mt_rand() . '.' . $file->getClientOriginalExtension();
       $file->move(public_path() . '/files/lists/', $fileName);

       return '/files/lists' . $fileName;
   }

   protected function processFile($name, $title, $request)
   {

    if ($request->hasFile($name))
    {   


     if ($request->file($name)->isValid())
     {
       

         $file = $request->file($name);
         return $this->moveFile($file, $title);     
     }
    }
   }

   protected function createDataArray($request) {

    $title = 'Vehicle-List';
    $data = $request->all();

    $vehicle_link = $this->processFile('file_path', $title, $request);
   
    if(isset($vehicle_link)) $data['file_path'] = $vehicle_link;


    return $data;
   }

   public function cleanInput($input)
   {
    return preg_replace('@[\'"/\\<>;\r\n- ]@', '', $input);
   }  

}
