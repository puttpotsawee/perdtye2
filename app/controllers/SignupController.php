<?php

class SignupController extends BaseController {
	public function signup() {

		$user = new Member;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
 		$user->email = Input::get('email');
 		$user->status = Input::get('status');
 		$user->name = Input::get('name');
 		$user->surname = Input::get('surname');
 		$user->phonenumber = Input::get('phonenumber');
		$user->save();

		return 'good';
 
	} // Ends Signup Function

	public function test()
	{
		return 'ok';
	}
	public function index()
	{
		return Redirect::to('signup/create');
	}

	public function create()
	{
		return View::make('signup');
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
}
