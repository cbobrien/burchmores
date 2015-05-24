<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FinanceEnquiryRequest;
use App\Http\Requests\SellCarRequest;
use App\FinanceEnquiry;
use App\SellCar;
use App\Enquiry;
use App\Http\Requests\EnquiryRequest;
use App\Helpers;
use App\Location;
use App\Auction;
use App\City;

class FormsController extends Controller {

	public function financeEnquiry(FinanceEnquiryRequest $request)
	{
		
		FinanceEnquiry::create($request->all());

		$city = City::with('locations')->where('id', $request->city_id)->first();

		foreach($city->locations as $location):
			$emails_to = $location->emails_to;
			$emails_cc = $location->emails_cc;
		endforeach;

		$data = ['firstname' => trim($request->first_name),
				 'surname' => trim($request->surname),
				 'email' => trim($request->email),
				 'tel' => trim($request->telephone),
				 'work_tel' => trim($request->work_telephone),
				 'requirements' => trim($request->requirements),
				 'comments' => trim($request->comments),
				 'date_sent' => date('d F Y'), 
				 'time_sent' => date('H:i'),
				 'emails_to' => $emails_to,
				 'emails_cc' => $emails_cc,
				 'subject' => 'Finance Enquiry',
				 'city' => $city->city
				];

		Helpers::sendMail($data, 'finance');

		return redirect()->route('pages.thanks')->with('message', 'Thank you for your enquiry.');
	}

	public function sellYourCar(SellCarRequest $request)
	{				
	
		$data_db = $this->createDataArray($request);
		SellCar::create($data_db);

		$city = City::with('locations')->where('id', $request->city_id)->first();
		
		foreach($city->locations as $location):
			$emails_to = $location->emails_to;
			$emails_cc = $location->emails_cc;
		endforeach;

		$data = ['firstname' => trim($request->first_name),
				 'surname' => trim($request->surname),
				 'email' => trim($request->email),
				 'tel' => trim($request->telephone),
				 'make' => trim($request->make),
				 'model' => trim($request->model),
				 'year' => trim($request->year),
				 'mileage' => trim($request->mileage),
				 'colour' => trim($request->colour),
				 'registration' => trim($request->registration),
				 'comments' => trim($request->comments),
				 'date_sent' => date('d F Y'), 
				 'time_sent' => date('H:i'),
				 'emails_to' => $emails_to,
				 'emails_cc' => $emails_cc,
				 'subject' => 'Sell Your Car Enquiry',
				 'city' => $city->city
				];

		Helpers::sendMail($data, 'sell');

		return redirect()->route('pages.thanks')->with('message', 'Thank you for your enquiry.');
	}

	public function auction(EnquiryRequest $request)
	{				

		Enquiry::create($request->all());

		$auction = Auction::find($request->auction_id);
		$location = Location::find($auction->location_id);

		$data = ['firstname' => trim($request->first_name),
				 'surname' => trim($request->surname),
				 'email' => trim($request->email),
				 'tel' => trim($request->telephone),
				 'message_body' => trim($request->message),
				 'date_sent' => date('d F Y'), 
				 'time_sent' => date('H:i'),
				 'auction_date' => date('d F Y', strtotime($auction->auction_date)),
				 'auction_time' => date('H:i', strtotime($auction->auction_date)),
				 'auction_location' => $location->name,
				 'emails_to' => $location->emails_to,
				 'emails_cc' => $location->emails_cc,
				 'subject' => 'Auction Enquiry'
				];

		Helpers::sendMail($data, 'auctions');

		return redirect()->route('pages.thanks')->with('message', 'Thank you for your enquiry.');
	}

	protected function moveFile($file, $title)
	{ 
		$fileName = $this->cleanInput($title) . '-' . mt_rand() . '.' . $file->getClientOriginalExtension();
		$file->move(public_path() . '/files/cars/', $fileName);
		return '/files/cars/' . $fileName;
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

		$title = 'Sell-Your-Car';
		$data = $request->all();

		for($i = 1; $i <= 5; $i++)
		{
			$image_link = $this->processFile('image_path'.$i, $title, $request);
			if(isset($image_link)) $data['image_path'.$i] = $image_link;
		}
		return $data;
	}

	public function cleanInput($input)
	{
		return preg_replace('@[\'"/\\<>;\r\n- ]@', '', $input);
	}  

}
