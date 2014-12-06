 <?php

class AuctionController extends BaseController {

	

	public function maxBid()
	{
		$user = Auth::user();
		if($user->status == 'blacklist') {
			return Redirect::back()->with('message','Error you are blacklisted');
		}
		
		$bid = Input::get('maxbid_input');
		$idProduct = Input::get('idProduct');
		$product = Product_auction::find($idProduct);
		
		if($product->current_price < $bid) {
			$product->current_price = $bid;
			$product->save();
			return Redirect::back()->with('message','Bid Successful !');
		}
		else {
			return Redirect::back()->with('message','Error underbid');
		}

	}

	public function placeBid()
	{
		$user = Auth::user();
		if($user->status == 'blacklist') {
			return Redirect::back()->with('message','Error you are blacklisted');
		}

		$idProduct = Input::get('idProduct');
		$product = Product_auction::find($idProduct);


	

}
