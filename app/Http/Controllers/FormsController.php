<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FinanceEnquiryRequest;
use App\Http\Requests\SellCarRequest;
use App\FinanceEnquiry;
use App\SellCar;

class FormsController extends Controller {

	public function financeEnquiry(FinanceEnquiryRequest $request)
	{
		FinanceEnquiry::create($request->all());
		return redirect()->route('pages.thanks')->with('message', 'Thank you for your enquiry');
	}

	public function sellYourCar(SellCarRequest $request)
	{		
		$data = $this->createDataArray($request);
		SellCar::create($data);
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
