<?php

class SignupController extends BaseController {
	public function signup() {

		$user = new Member;
		$address = new Address;

 		$user->username = Input::get('name');
 		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
 		$user->name = Input::get('name');
 		$user->surname = Input::get('surname');
 		$user->phonenumber = Input::get('phonenumber');
 		$user->save();

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

		return 'good';
 
	} // Ends Signup Function
	/*
	public function test()
	{
		return 'ok';
	}
	public function index()
	{
		return View::make('signup2');

		//return Redirect::to('signup/create');
	}

	public function create()
	{
		return View::make('signup2');
	}
	public function store()
	{
		$user = new Member;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
 		$user->email = Input::get('email');
 		$user->status = Input::get('status');
 		$user->name = Input::get('name');
 		$user->surname = Input::get('surname');
 		$user->phonenumber = Input::get('phonenumber');
		$user->save();

		return 'saved!';
	}
	*/
}
