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

	public function sendConfirmationEmail($user)
	{
		
		$name = $user->name;
		$token = $user->confirm_token;
		$email = $user->email;

		$data = array('name'=>$name,'link'=>$link);

		Mail::send('emails.confirmation', $data, function($message)
		{
			$message->to($email, 'Pradinan P.')->subject('Welcome!');
		});
	}
	
	
	
}
