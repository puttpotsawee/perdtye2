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
	
	public function activateMember($username,$token)
	{
		$thisUser = Member::where('username','=',$username)->get()->first();
		if($thisUser->count()==0){
			//user not found
			return "Token is invalid";
		} else {
			$thisToken = $thisUser->confirm_token;
			if($token==$thisToken){
				// this mean the token is correct
                if ($thisUser->status != "pending"){
                    return Redirect::to('home');
                } else {
                    $thisUser->status = 'buyer';
                    $thisUser->save();
                }			
				Auth::login($thisUser);
				return View::make('/perdtye/confirmsuccess')->with('email',$thisUser->email);
			} else {
				return "Token is invalid";
			}
		}
	}
}
