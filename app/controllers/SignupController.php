<?php

class SignupController extends BaseController {

	public function index() {
		if (Auth::check())
		{	
			return Redirect::to('/');
		}		
		else 
		{	
			return View::make('/perdtye/signup');
		}
	}

	public function signup() {

		$validator = Validator::Make(
			array(
				// Member table
				'username' => Input::get('username'),
				'email' => Input::get('email'),
			),
			array(
				'username' => 'required|unique:member,username',
				'email' => 'required|unique:member,email',
			)
		);

		if($validator->passes())
		{
			$user = new Member;
			$address = new Address;

			$confirm_code = str_random(45);

 			$user->username = Input::get('username');
 			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
 			$user->name = Input::get('name');
 			$user->surname = Input::get('surname');
 			$user->phonenumber = Input::get('phonenumber');
 			$user->birthdate =  DateTime::createFromFormat('d/m/Y', Input::get('birthdate'))->format('Y-m-d');
 			$user->confirm_token = $confirm_code;
 			$user->save();

 			// get inserted key from Member Table
			$insertedId = $user->idmember;

			$address->idmember = $insertedId;
 			$address->country = Input::get('country');
 			$address->zipcode = Input::get('zipcode');
 			$address->province = Input::get('province');
 			$address->city = Input::get('city');
 			$address->district = Input::get('district');
 			$address->road = Input::get('road');
 			$address->house_number = Input::get('house_number');
 			$address->save();

 			EmailController::sendConfirmationEmail($user);

			return View::Make('perdtye/pending')->with('user', $user);
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}
	}
 		
	public function sellregister()
	{
		$user = Auth::user();
	if($user->status == 'buyer') {
		return View::make('/perdtye/sellregister')->with('user', $user);
	}
	else
		 	return Redirect::back()->with('message','Cannot proceed.');
	}

	public function registeringSeller()
	{
		$thisUser = Auth::user();
		$idcard = Input::get('idcardnumber');

		$thisUser->status = 'seller';
		$thisUser->save();

		$seller = new Seller;
		$seller->idseller = $thisUser->idmember;
		$seller->idcardnumber = $idcard;
		$seller->idcardcopy = 'www.google.co.th';
		$seller->save();

		Session::flash('flash_success','You are a seller');

		return Redirect::to('/account');
	}
	
}
