 <?php

class AccountController extends BaseController {

	// public function answer()
	// {
	// 	return View::make('/perdtye/answer');
	// }
	public static function showAccount()
	{
		if(Input::has('id') && Auth::user()->idmember != Input::get('id'))
		{
			$idmember = Input::get('id');
			$member = Member::find($idmember);

			$name = $member->name;
			$surname = $member->surname;
			$receiver = $member->idmember;
			$idmember = $member->idmember;
			$flag = 'false';
		}
		else
		{
			$name = Auth::user()->name;
			$surname = Auth::user()->surname;
			$receiver = Auth::user()->idmember;
			$idmember = Auth::user()->idmember;
			$flag = 'true';
		}

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

		$bidding_product = DB::table('auction_list')
			->where('auction_list.idmember', '=', $idmember)
			->groupBy('auction_list.idproduct_auction')
        	->join('product', 'auction_list.idproduct_auction', '=', 'product.idProduct')
        	->join('product_auction', 'product_auction.idproduct_auction', '=', 'product.idProduct')
        	->join('member as member1', 'member1.idmember', '=', 'product.idseller')
        	->join('member as member2', 'member2.idmember', '=', 'product_auction.current_winner')
        	->leftjoin('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')
        	->leftjoin('transaction', 'transaction.idproduct', '=', 'product_auction.idproduct_auction')
        	->select('product.idProduct','product.product_name', 'productpicture.picture_url', 'member1.idmember', 'member1.name', 'member1.surname',
        			'product_auction.isend','product_auction.end_time','product_auction.current_price', 'member2.name as c_name', 'member2.surname as c_surname')
			->get();


		$question = DB::table('question')
			->where('question.idmember', '=', $idmember)
        	->join('product', 'question.idproduct', '=', 'product.idProduct')
        	->join('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')
        	->join('seller', 'product.idseller', '=', 'seller.idseller')
        	->join('member', 'member.idmember', '=', 'seller.idseller')
        	->leftjoin('answer', 'question.idQuestion', '=', 'answer.idquestion')
        	->groupBy('question.idQuestion')
        	->select('question.idQuestion as idQuestion', 'product.product_name', 'productpicture.picture_url', 'member.name','member.username', 'answer.content as answer', 
        			'question.topic as topic','question.content as question')
        	->get();

        $productAns = Product::join('question', 'product.idProduct', '=', 'question.idproduct')
        ->join('member', 'question.idmember','=', 'member.idmember')
        ->leftjoin('productpicture','product.idProduct','=','productpicture.idProduct')
        ->where('idseller','=',$idmember)
        ->groupBy('question.idQuestion')
        ->get();
        	// $questionseller = Question::where('')
        // return $productAns;
        // $questionseller = Question::where('idproduct','=',$product->idProduct);
        // return $questionseller;


        $buy_history = DB::table('transaction')
			->where('transaction.idmember', '=', $idmember)
        	->join('product', 'transaction.idproduct', '=', 'product.idProduct')
        	->join('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')  	
        	->join('seller', 'product.idseller', '=', 'seller.idseller')
        	->join('member', 'member.idmember', '=', 'seller.idseller')
        	->select('transaction.idTransaction', 'product.product_name', 'productpicture.picture_url', 'member.idmember', 
        			'transaction.status', 'member.name', 'member.surname', 'transaction.timestamp', 'transaction.price')
        	->groupBy('transaction.idTransaction')
        	->get();

        $sell_history = DB::table('transaction')
			->where('transaction.idseller', '=', $idmember)
        	->join('product', 'transaction.idproduct', '=', 'product.idProduct')
        	->join('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')  	
        	->join('member', 'member.idmember', '=', 'transaction.idmember')
        	->select('transaction.idTransaction', 'product.product_name', 'productpicture.picture_url', 'member.idmember', 
        		'transaction.status', 'member.name', 'member.surname', 'transaction.timestamp', 'transaction.price')
        	->groupBy('transaction.idTransaction')
        	->get();

       	$direct_sell = DB::table('product')
			->where('product.idseller', '=', $idmember)
        	->join('product_direct', 'product_direct.idproduct_direct', '=', 'product.idProduct')
        	->join('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')
        	->select('product.product_name', 'productpicture.picture_url', 'product_direct.quantity', 'product_direct.remaining', 
        			'product_direct.price')
        	->groupBy('product.idProduct')
        	->get();

        $auction_sell = DB::table('product')
			->where('product.idseller', '=', $idmember)
        	->join('product_auction', 'product_auction.idproduct_auction', '=', 'product.idProduct')
        	->leftjoin('productpicture', 'product.idproduct', '=', 'productpicture.idproduct')
        	->leftjoin('member', 'member.idmember', '=', 'product_auction.current_winner')
        	->select('product.product_name', 'productpicture.picture_url', 'product_auction.end_time', 'product_auction.minimum_bid', 
        			'product_auction.bidding_range', 'product_auction.current_price', 'product_auction.current_winner',
        			'member.name', 'member.surname', 'product_auction.isend')
        	->groupBy('product_auction.idproduct_auction')
        	->get();

		return View::Make('perdtye/account')->with(
			array(
				'name'=> $name, 
				'surname' => $surname,
				'negative' => $negative,
				'neutral' => $neutral,
				'positive' => $positive,
				'question' => $question,
				'buy_history' => $buy_history,
				'sell_history' => $sell_history,
				'direct_sell' => $direct_sell,
				'auction_sell' => $auction_sell,
				'bidding_product' => $bidding_product,
				'questionseller'=>$productAns,
				'flag' => $flag

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