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
		if(Auth::check()){
			//this is when user have already logged in
			return Redirect::to('/');
		}
    	return View::make("perdtye/login");
	}

	public function store()
	{
		//this resposible for loggin the user in
		if(Auth::attempt(Input::only('username','password')))
		{
			if (Auth::user()->status == 'pending'){
				Auth::logout();
				return Redirect::back()->withInput()->with('flash_error','Please confirm your email to login to the system');

			}
			return Redirect::to('/');
			
		}
		return Redirect::back()->withInput()->with('flash_error','the username and password is incorrect');

	}

	public function destroy()
	{
		//this is used when user's logging out
		Auth::logout();
		return Redirect::to('/login');
	}
	
	public function index()
	{

	}
}
