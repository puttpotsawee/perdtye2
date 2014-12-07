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
			return Redirect::to('/');
		} else {
			$thisToken = $thisUser->confirm_token;
			if($token==$thisToken){
				// this mean the token is correct
                if ($thisUser->status != "pending"){
                    return Redirect::to('home');
                } else {
                    $thisUser->status = 'buyer';
                    $thisUser->confirm_token = null;
                    $thisUser->save();
                }			
				Auth::login($thisUser);
				// return $thisUser->email;
				// return View::make('index');
				return View::make('perdtye/confirmsuccess')->with('email',$thisUser->email);
			} else {
				return Redirect::to('/');
			}
		}
	}
	

	public function forgotPassword()
	{
		return View::make('/perdtye/forgot');
	}
	public function sendEmailResetPassword()
	{
		$inputEmail = Input::get('email');
		$validator = Validator::make(
			array('email'=>$inputEmail),
			array('email'=>'exists:member,email'));

		if(!$validator->fails()){
			$user = Member::where('email','=',$inputEmail)->get();
			if ($user->count() >0){
				$thisUser = $user->first();
				$confirm_code = str_random(45);

				$thisUser->confirm_token = $confirm_code;
				$thisUser->save();

				EmailController::sendResetPasswordEmail($thisUser);
			}

		}

		return View::make('/perdtye/forgotconfirm')->with('email',$inputEmail);
	}

	public function resetPasswordForm($username,$token)
	{
		$thisUser = Member::where('username','=',$username)->get()->first();
		if($thisUser->count()==0){
			//user not found
			return Redirect::to('/');
		} else {
			$thisToken = $thisUser->confirm_token;
			if($token==$thisToken){
				// this mean the token is correct
                $thisUser->confirm_token = null;
                $thisUser->save();		
				
				Session::flash('resetpass',$thisUser->idmember);
				return View::make('perdtye/resetPassword');
			} else {
				return Redirect::to('/');
			}
		}
	}

	public function resetPassword(){
		if(Session::has('resetpass')){
			$id = Session::get('resetpass');
			$thisUser = Member::find($id);
			$newPass = Input::get('password');
			$thisUser->password = Hash::make($newPass);
			$thisUser->save();

			Auth::login($thisUser);
			return View::make('perdtye/resetPasswordConfirm')->with('name',$thisUser->name);


		} else {
			return Redirect::to('/');
		}

	}

}
