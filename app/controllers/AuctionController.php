 <?php

class AuctionController extends BaseController {

	
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
        return AuctionController::getWinner($idProduct);
        
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
            return AuctionController::getWinner($idProduct);
        }
        else
        {
        	return Redirect::back()->with('message','Error: underbid');
        }
    }

	public static function getWinner($idProduct)
	{
		$bid_list = Auction_list::where('idproduct_auction', '=', $idProduct)->orderBy('bid_price', 'desc')->get();
		

		if ($bid_list->count() == 1) {	
			$product = Product_auction::find($idProduct);
			$product->current_price = $product->current_price + $product->bidding_range;
	        $product->current_winner = Auth::user()->idmember;
	        $product->save();
		}

		else {
			$win_list = $bid_list->take(2);
			$winner = $win_list->first();
			$runnerup = $win_list->last();
			
			$product = Product_auction::find($idProduct);
			if($runnerup->bid_price + $product->bidding_range > $winner->bid_price)
			{
				$product->current_price = $winner->bid_price;
			}
			else
			{
				$product->current_price = $runnerup->bid_price + $product->bidding_range;
	        }
	        $product->current_winner = $winner->idmember;
	        $product->save();
		}

		if($winner->idmember == Auth::user()->idmember)
			return Redirect::back()->with('message','Placed bid successfully. You win !');
		else
		{	
			// send email to previous winner
			EmailController::sendBidLostEmail($runnerup);			
			return Redirect::back()->with('message','Placed bid successfully. You lose !');
		}
	}
}