 <?php

class AuctionController extends BaseController {

	
	public function maxBid()
	{
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
		$idProduct = Input::get('idProduct');
		$product = Product_auction::find($idProduct);

		$product->current_price = $product->current_price + $product->bidding_range;
		$product->save();
		
		return Redirect::back()->with('message','Bid Successful !');
		
	}

}
