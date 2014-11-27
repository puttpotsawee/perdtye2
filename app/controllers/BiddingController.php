 <?php

class BiddingController extends BaseController {

	
	public function placeBid()
    {
        $idProduct = Input::get('idProduct');
        $product = Product_auction::find($idProduct);

        $auction = new Auction_list;
        $auction->idproduct_auction = $idProduct;
        $auction->idmember = Auth::user()->idmember;
        $auction->bid_price = $product->current_price + $product->bidding_range;

        $auction->save();

        $newPrice = AuctionController::getWinner($idProduct);

        $product->current_price = $product->current_price + $product->bidding_range;
        $product->save();
        
        return Redirect::back()->with('message','Bid Successful !');
        
    }

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


  	
}
