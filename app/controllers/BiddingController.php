 <?php

class BiddingController extends BaseController {

	
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
        AuctionController::getWinner($idProduct);

        return Redirect::back()->with('message','Bid Successful !');
        
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

            AuctionController::getWinner($idProduct);

            return Redirect::back()->with('message','Bid Successful !');
        }
        else {
            return Redirect::back()->with('message','Error underbid');
        }

    }


  	
}
