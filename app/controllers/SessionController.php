<?php

class SessionController extends BaseController {

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

	public function create()
	{
		//this responsible for showing the login form
    	return View::make("login");
	}

	public function store()
	{
		//this resposible for loggin the user in
		if(Auth::attempt(Input::only('username','password')))
		{
			return Auth::user();
		}
		return 'failed!';

	}

	protected function isPostRequest()
  	{
    return Input::server("REQUEST_METHOD") == "POST";
  	}
}
