<?php namespace App\Http\Controllers;

use View;
use App\FAQ;
use App\City;
use App\Location;

class PagesController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Welcome Controller
  |--------------------------------------------------------------------------
  |
  | This controller renders the "marketing page" for the application and
  | is configured to only allow guests. Like most of the other sample
  | controllers, you are free to modify or remove it as you desire.
  |
  */

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('guest');
  }

  /**
   * Show the application welcome screen to the user.
   *
   * @return Response
   */
  public function index()
  {
    // return view('pages/home');
    return View::make('pages/home')->with("title","Home");
  }

  public function about()
  {
    // return view('pages/about');
    return View::make('pages.about')->with("title","About Us");
  }  

  public function contact()
  {
    return View::make('pages.contact')->with("title","Contact Us");
    // return View::make('pages.about')->with("title","About Us");
  }    

  public function auctions()
  {
    $cities = City::with('locations.auctions')->orderBy('order')->get();
    // dd($cities);
    return View::make('pages.auctions')->with([ "title" => "Auctions", 'cities' => $cities ]);
    // return View::make('pages.about')->with("title","About Us");
  }      

  public function auction()
  {
    return View::make('pages.auction')->with("title","Auction");
    // return View::make('pages.about')->with("title","About Us");
  }        

  public function faqs()
  {
    $faq = FAQ::all();
    return View::make('pages.faq')->with("title","FAQ's")->with("faqs",$faq);
    // return View::make('pages.about')->with("title","About Us");
  }

  public function privacy()
  {
    // return view('pages/about');
    return View::make('pages.privacy')->with("title","Privacy Statement");
  }

  public function terms()
  {
    // return view('pages/about');
    return View::make('pages.terms')->with("title","Terms Of Use");
  }

  public function sitemap()
  {
    // return view('pages/about');
    return View::make('pages.sitemap')->with("title","Sitemap");
  }

  public function sellYourCar()
  {
    // return view('pages/about');
    $cities = City::lists('city', 'id');   
    return View::make('pages.sellYourCar')->with(["title" => "Sell your car", 'cities' => $cities]);
  }  

  public function financesAndWarranties()
  {
    // return view('pages/about');
    return View::make('pages.financesAndWarranties')->with("title","Finances & Warranties");
  }    

    public function financeEnquiry()
  {
    // return view('pages/about');    
    $cities = City::lists('city', 'id');   
    return View::make('pages.finance-enquiry')->with(["title" => "Finances & Warranties", 'cities' => $cities]);
  }   

  public function howToRegister()
  {
    // return view('pages/about');
    return View::make('pages.howToRegister')->with("title","How to Register");
  }   

  public function thanks()
  {
    // return view('pages/about');
    return View::make('pages.thanks');
  }   

}