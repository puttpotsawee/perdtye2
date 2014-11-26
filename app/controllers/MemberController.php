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
	public function showAccount()
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

/*       	$bidding = DB::table('auction_list')
			->where('auction_list.idmember', '=', $idmember)
        	->join('product', 'product.idProduct', '=', 'auction_list.idproduct_auction')
        	->select('product.product_name', 'product_direct.quantity', 'product_direct.remaining', 'product_direct.price')
        	->get();*/

         //return $question;

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

	public function editAccount()
	{
		$member = Auth::user();
		$name = $member->name;
		$surname = $member->surname;
		

		return View::Make('perdtye/editaccount')->with(
			array(
				'name' => $name,
				'surname' => $surname
			));
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
