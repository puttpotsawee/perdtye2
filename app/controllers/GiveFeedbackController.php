 <?php

class GiveFeedbackController extends BaseController {

	// From route:
	// Route::get('feedback','MemberController@seeFeedback')->before('auth');
	// Route::get('feedback',function()
	//{
	//    return View::make('/perdtye/feedback');
	//});

	public function giveFeedback()
	{

		$idTransaction = Input::get('id');
		$Trans = Transaction::find($idTransaction);

		//buy history
		if($Trans->idmember == Auth::user()->idmember)
		{
			$idproduct = $Trans->idproduct;
			$idseller = $Trans->idseller;

			$product = Product::find($idproduct);
			$seller = Member::find($idseller);

			$product_name = $product->product_name;		
			$seller_name = $seller->username;

    		if (!is_null(DB::table('feedback')->where('idtransaction', '=', $idTransaction)->where('idreceiver', '=', $idseller)->first())) 
    		{
				return Redirect::To('account')->with('flash_msg', 'Oop! You have given the feedback already.');
			}
			else
			{
				return View::make('/perdtye/feedback')->with(array('idTransaction' => $idTransaction, 'product_name' => $product_name, 'member_username' => $seller_name));
			}
		}

		//sell history
		elseif($Trans->idseller == Auth::user()->idmember)
		{
			$idproduct = $Trans->idproduct;
			$idmember = $Trans->idmember;

			$product = Product::find($idproduct);
			$buyer = Member::find($idmember);

			$product_name = $product->product_name;		
			$buyer_name = $buyer->username;

			if (!is_null(DB::table('feedback')->where('idtransaction', '=', $idTransaction)->where('idreceiver', '=', $idmember)->first())) 
    		{
				return Redirect::To('account')->with('flash_msg', 'Oop! You have given the feedback already.');
			}
			else 
			{
			return View::make('/perdtye/feedback')->with(array('idTransaction' => $idTransaction, 'product_name' => $product_name, 'member_username' => $buyer_name));
			}
		}


	}
	public function storeFeedback()
	{
		$idTransaction = Input::get('idTransaction');
		$Trans = Transaction::find($idTransaction);
		
		if($Trans->idmember == Auth::user()->idmember)
		{
			$idproduct = $Trans->idproduct;

			$idreceiver = $Trans->idseller;
			$idgiver = Auth::user()->idmember;

			$feedback = new Feedback;
			$feedback->idgiver = $idgiver;
			$feedback->idreceiver = $idreceiver;
			$feedback->idproduct = $idproduct;
			$feedback->score = Input::get('score');
			$feedback->content = Input::get('content');
			$feedback->idtransaction = $idTransaction;

			$feedback->save();

			return Redirect::To('account')->with('flash_success', 'Successful!! Your feedback have been saved. Thank you.');
		}
		elseif($Trans->idseller == Auth::user()->idmember)
		{
			$idproduct = $Trans->idproduct;

			$idreceiver = $Trans->idmember;
			$idgiver = Auth::user()->idmember;

			$feedback = new Feedback;
			$feedback->idgiver = $idgiver;
			$feedback->idreceiver = $idreceiver;
			$feedback->idproduct = $idproduct;
			$feedback->score = Input::get('score');
			$feedback->content = Input::get('content');
			$feedback->idtransaction = $idTransaction;
			$feedback->save();

			return Redirect::To('account')->with('flash_success', 'Successful!! Your feedback have been saved. Thank you.');	
		}


	}


}
