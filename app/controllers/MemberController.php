<?php

class MemberController extends BaseController {

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

	public function login()
	{
		if ($this->isPostRequest()) {
			// $validator = $this->getLoginValidator();

			// if ($validator->passes()) {
			// 	$credentials = $this->getLoginCredentials();

			// 	if (Auth::attempt($credentials)) {
			// 		return Redirect::route("user/profile");
			// 	}

			// 	return Redirect::back()->withErrors([
			// 		"password" => ["Credentials invalid."]
			// 		]);
			// } else {
			// 	return Redirect::back()
			// 	->withInput()
			// 	->withErrors($validator);
			// }
			return 'hahahaha';
		}

    return View::make("login");
	}

	protected function isPostRequest()
  	{
    return Input::server("REQUEST_METHOD") == "POST";
  	}
}