<?php

class EmailController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public static function sendConfirmationEmail($user)
	{
		$username = $user->username;
		$name = $user->name;
		$token = $user->confirm_token;
		$email = $user->email;


		$link = App::make('url')->to('/')."/account/activate/".$username."/".$token;
		$data = array('name'=>$name,'link'=>$link);
		



		Mail::send('emails.confirmation', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('Email Confirmation from PerdTye.com');
		});
	}
	
	
	
}
