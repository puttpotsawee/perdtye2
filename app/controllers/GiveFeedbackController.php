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
		$idproduct = $Trans->idproduct;
		$idseller = $Trans->idseller;

		$product = Product::find($idproduct);
		$seller = Member::find($idseller);

		$product_name = $product->product_name;		
		$seller_name = $seller->name;


		return View::make('/perdtye/feedback')->with(array('idTransaction' => $idTransaction, 'product_name' => $product_name, 'seller_name' => $seller_name));
	}
	public function storeFeedback()
	{
		$idTransaction = Input::get('idTransaction');
		$Trans = Transaction::find($idTransaction);
		$idproduct = $Trans->idproduct;

		$idreceiver = $Trans->idseller;
		$idgiver = Auth::user()->idmember;

		$feedback = new Feedback;
		$feedback->idgiver = $idgiver;
		$feedback->idreceiver = $idreceiver;
		$feedback->idproduct = $idproduct;
		$feedback->score = Input::get('score');
		$feedback->content = Input::get('content');
		$feedback->save();

		return Redirect::To('account');

	}


}
