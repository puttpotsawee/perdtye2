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
	public static function showAccount()
	{
		$name = Auth::user()->name;
		$surname = Auth::user()->surname;
		$receiver = Auth::user()->idmember;
		$idmember = Auth::user()->idmember;

		$negative = DB::table('feedback')
			->where('idreceiver', '=', $receiver)
            ->whereIn('score', array(0, 1))
			->count();

		$neutral = DB::table('feedback')
			->where('idreceiver', '=', $receiver)
            ->whereIn('score', array(2, 3))
			->count();

		$positive = DB::table('feedback')
			->where('idreceiver', '=', $receiver)
            ->whereIn('score', array(4, 5))
			->count();

		$question = DB::table('question')
			->where('question.idmember', '=', $idmember)
        	->join('product', 'question.idproduct', '=', 'product.idProduct')
        	->join('seller', 'product.idseller', '=', 'seller.idseller')
        	->join('member', 'member.idmember', '=', 'seller.idseller')
        	->join('answer', 'question.idQuestion', '=', 'answer.idquestion')
        	->select('product.product_name', 'member.username', 'answer.content as answer', 'question.content as question')
        	->get();

        $history = DB::table('transaction')
			->where('transaction.idmember', '=', $idmember)
        	->join('product', 'transaction.idproduct', '=', 'product.idProduct')
        	->join('seller', 'product.idseller', '=', 'seller.idseller')
        	->join('member', 'member.idmember', '=', 'seller.idseller')
        	->select('product.product_name', 'member.username', 'transaction.timestamp', 'transaction.price')
        	->get();

       	$sell = DB::table('product')
			->where('product.idseller', '=', $idmember)
        	->join('product_direct', 'product_direct.idproduct_direct', '=', 'product.idProduct')
        	->select('product.product_name', 'product_direct.quantity', 'product_direct.remaining', 'product_direct.price')
        	->get();

		return View::Make('perdtye/account')->with(
			array(
				'name'=> $name, 
				'surname' => $surname,
				'negative' => $negative,
				'neutral' => $neutral,
				'positive' => $positive,
				'question' => $question,
				'history' => $history,
				'sell' => $sell

			));
			
	}

	public static function editAccount()
	{
		$member = Auth::user();
		$idmember = $member->idmember;
		$name = $member->name;
		$surname = $member->surname;
		$birthdate = $member->birthdate;
		$email = $member->email;
		$phonenumber = $member->phonenumber;
		$address = $member->address->first();

		return View::Make('perdtye/editaccount')->with(
			array(
				'name' => $name,
				'surname' => $surname,
				'birthdate' => $birthdate,
				'email' => $email,
				'phonenumber' => $phonenumber,
				'address' => $address
			));
	}

	public static function saveEditedAccount()
	{
		$validator = Validator::Make(
			array(
				// Member table
				'password' => Input::get('password')
			),
			array(
				'password' => 'required|min:8'
			)
		);

			$member = Auth::user();

			$member->phonenumber = Input::get('phonenumber');
			$member->email = Input::get('email');
 			$member->name = Input::get('name');
 			$member->surname = Input::get('surname');
 			$member->birthdate = Input::get('birthdate');

			$address = $member->address->first();
 			$address->country = Input::get('country');
 			$address->zipcode = Input::get('zipcode');
 			$address->province = Input::get('province');
 			$address->city = Input::get('city');
 			$address->district = Input::get('district');
 			$address->road = Input::get('road');
 			$address->house_number = Input::get('house_number');

 			if(Input::get('oldpassword') == '')
 			{
 				$member->save();
 				$address->save();
				return Redirect::back()->with('flash_message','Your account has been saved.');
 			}
 			else
 			{
 				if ($validator->fails())
				{
 					return Redirect::back()->with('flash_error','New password should be at least 8 characters.');
				}
				else
				{
  					$temp = Input::get('oldpassword');
 					$hashinDB = $member->password;

					if (Hash::check($temp, $hashinDB))
 					{
 						$member->password = Hash::make(Input::get('password'));
 						$member->save();
 						$address->save();
						return Redirect::back()->with('flash_message','Your account has been saved.');
 					}
 					else
 					{
 						return Redirect::back()->with('flash_error','Your old password was wrong.');
 					}
				}
 			}


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
                if ($thisUser->status != "pending"){
                    return Redirect::to('home');
                } else {
                    $thisUser->status = 'buyer';
                    $thisUser->save();
                }			
				Auth::login($thisUser);
				return Redirect::to('/home');
			} else {
				return "Token is invalid";
			}
		}
	}
}
