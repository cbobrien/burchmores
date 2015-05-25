<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'PagesController@index');
Route::get('/about-us', 'PagesController@about');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/auctions', 'PagesController@auctions');
Route::get('/auction/{auction_id}', 'PagesController@auction');
Route::get('/sell-your-car', 'PagesController@sellYourCar');
Route::get('/how-to-register', 'PagesController@howToRegister');
Route::get('/finances-and-warranties', 'PagesController@financesAndWarranties');
Route::get('/finance-enquiry', ['as' => 'pages.finance-enquiry', 'uses' => 'PagesController@financeEnquiry']);
Route::get('/faq', 'PagesController@faqs');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/terms', 'PagesController@terms');
Route::get('/sitemap', 'PagesController@sitemap');

Route::get('/thank-you', ['as' => 'pages.thanks', 'uses' => 'PagesController@thanks']);

//front end forms
Route::post('/finance-enquiry/send', ['as' => 'finance-enquiry.send', 'uses' => 'FormsController@financeEnquiry']);
Route::post('/sell-you-car/send', ['as' => 'sell-your-car.send', 'uses' => 'FormsController@sellYourCar']);
Route::post('/auction/send', ['as' => 'auction.send', 'uses' => 'FormsController@auction']);


// Route::group(['middleware' => 'auth'], function () {  

  Route::get('/admin', 'Admin\AdminController@index');

  Route::get('/admin/faq/all', 'Admin\FAQController@ajaxAll');
  Route::resource('/admin/faq', 'Admin\FAQController');

  Route::get('/admin/testimonial/all', 'Admin\TestimonialController@ajaxAll');
  Route::resource('/admin/testimonial', 'Admin\TestimonialController');

  Route::resource('/admin/auction', 'Admin\AuctionController');

  Route::resource('/admin/testimonial', 'Admin\TestimonialController');

  Route::get('/admin/location/all', 'Admin\LocationController@ajaxAll');
  Route::resource('/admin/location', 'Admin\LocationController');

  Route::get('/admin/cities/all', 'Admin\CitiesController@ajaxAll');
  Route::resource('/admin/cities', 'Admin\CitiesController');

  Route::get('/admin/auctions/all', 'Admin\AuctionController@ajaxAll');
  Route::resource('/admin/auctions', 'Admin\AuctionController');

  Route::get('/admin/enquiries/all', 'Admin\EnquiriesController@ajaxAll');
  Route::resource('/admin/enquiries', 'Admin\EnquiriesController');

  Route::get('/admin/finance-enquiries/all', 'Admin\FinanceEnquiryController@ajaxAll');
  Route::resource('/admin/finance-enquiries', 'Admin\FinanceEnquiryController', ['except' => ['create', 'store', 'edit', 'update']]);

  Route::get('/admin/sell-cars/all', 'Admin\SellCarsController@ajaxAll');
  Route::resource('/admin/sell-cars', 'Admin\SellCarsController', ['except' => ['create', 'store', 'edit', 'update']]);
  // Route::get('/admin/content/all', 'Admin\ContentController@ajaxAll');
  // Route::get('/admin/content/{page}', 'Admin\ContentController@getPage');

Route::get('/admin/content/{page}', 'Admin\ContentController@edit');
Route::post('/admin/content', ['as' => 'admin.content.update', 'uses' => 'Admin\ContentController@update']);
  // Route::resource('/admin/sell-cars', 'Admin\SellCarsController', ['except' => ['create', 'store', 'edit', 'update']]);

// });

  Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
  ]);
