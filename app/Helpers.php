<?php namespace App;

use App\Category;
use App\Car;
use App\Dealership;
use Debugbar;
use Request;
use Mail;

class Helpers {

	public static function sendMail($data, $view)
	{
		Mail::send('emails.' . $view, $data, function($message) use ($data)
		{
		    $message->from($data['email'], $data['firstname'] . ' ' . $data['surname']);
		    $message->subject($data['subject'] . ' from Burchmores website');
		    $message->to($data['emails_to'])->cc(explode(';',$data['emails_cc']));
		});
	}

	
}