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


	public function showAccount()
	{
		$name = Auth::user()->name;
		$surname = Auth::user()->surname;
		$receiver = Auth::user()->idmember;
		$idmember = Auth::user()->idmember;

		return Auth::user()->question;

		// $negative = DB::table('feedback')
		// 	->where('idreceiver', '=', $receiver)
  //           ->whereIn('score', array(0, 1))
		// 	->count();

		// $neutral = DB::table('feedback')
		// 	->where('idreceiver', '=', $receiver)
  //           ->whereIn('score', array(2, 3))
		// 	->count();

		// $positive = DB::table('feedback')
		// 	->where('idreceiver', '=', $receiver)
  //           ->whereIn('score', array(4, 5))
		// 	->count();

		// $question = DB::table('question')
		//     ->join('seller', 'question.idmember', '=', 'seller.idseller')
  //           ->join('product', 'question.idproduct', '=', 'product.idProduct')
  //           ->join('answer', 'question.idQuestion', '=', 'answer.idquestion')
  //           ->select('seller.name')
  //           ->get();

		// return View::Make('perdtye/account')->with(
		// 	array(
		// 		'name'=> $name, 
		// 		'surname' => $surname,
		// 		'negative' => $negative,
		// 		'neutral' => $neutral,
		// 		'positive' => $positive,
		// 		'question' => $question
		// 	));
	}

	public function editProfile()
	{
		return 'editprofile';
	}
	public function report()
	{
		return "report Page";
	}
	public function seeFeedback()
	{
		return "see feedback Page";
	}
	
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
				$thisUser->status = 'buyer';
				$thisUser->save();
				
				Auth::login($thisUser);
				return Redirect::to('/home');
			} else {
				return "Token is invalid";
			}
		}
	}
}
