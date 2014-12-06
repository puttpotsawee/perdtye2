 <?php

class AuctionController extends BaseController {

	

	/*public function maxBid()
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

	}*/

	public function placeBid()
    {
        // Check if blacklisted
        if(Auth::user()->status == 'blacklist') {
            return Redirect::back()->with('message','Error you are blacklisted');
        }
        
        // Read values from input
        $idProduct = Input::get('idProduct');
        $product = Product_auction::find($idProduct);
        
        // Create new Auction_list for specified product
        $auction = new Auction_list;
        $auction->idproduct_auction = $idProduct;
        $auction->idmember = Auth::user()->idmember;
        $auction->bid_price = $product->current_price + $product->bidding_range;
        $auction->save();

        // Find winner
        $winner = AuctionController::getWinner($idProduct);
        if($winner == Auth::user()->idmember)
        	return Redirect::back()->with('message','You win !');
        else
        	return Redirect::back()->with('message','You lose !');
    }

    public function maxBid()
    {
        // Check if blacklisted
        if(Auth::user()->status == 'blacklist') {
            return Redirect::back()->with('message','Error you are blacklisted');
        }

        // Read values from input
        $bid = Input::get('maxbid_input');
        $idProduct = Input::get('idProduct');
        $product = Product_auction::find($idProduct);
        
        // Create new Auction_list for specified product
        if($product->current_price + $product->bidding_range < $bid) {
            $auction = new Auction_list;
            $auction->idproduct_auction = $idProduct;
            $auction->idmember = Auth::user()->idmember;
            $auction->bid_price = $bid;
            $auction->save();

            // Find winner
            $winner = AuctionController::getWinner($idProduct);
	        if($winner == Auth::user()->idmember)
	        	return Redirect::back()->with('message','You win !');
	        else
	        	return Redirect::back()->with('message','You lose !');

        }
        else {
            return Redirect::back()->with('message','Error underbid');
        }

    }

	public static function getWinner($idProduct)
	{
		$bid_list = Auction_list::where('idproduct_auction', '=', $idProduct)->orderBy('bid_price', 'desc')->get();
	
		if ($bid_list->count() == 1) {
			
			$product = Product_auction::find($idProduct);
			$product->current_price = $product->current_price + $product->bidding_range;
	        $product->save();

			return $bid_list->first()->idmember;
		}
		else {
			
			$bid_list = $bid_list->take(2);
			$winner = $bid_list->first();
			$runnerup = $bid_list->last();
			
			$product = Product_auction::find($idProduct);
			if($runnerup->bid_price + $product->bidding_range > $winner->bid_price)
			{
				$product->current_price = $winner->bid_price;
			}
			else
			{
				$product->current_price = $runnerup->bid_price + $product->bidding_range;
	        }
	        $product->save();

		return $winner->idmember;
		}	
	}
}