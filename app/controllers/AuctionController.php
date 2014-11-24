 <?php

class AuctionController extends BaseController {

	
	public function bid($idProduct)
	{
		$bid = Input::get('maxbid_input');
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

  	
}
