 <?php

class AuctionController extends BaseController {

	
	public function placeBid()
    {
        if(!Auth::check())
            return View::make("perdtye/login");
        // Check if blacklisted
        if(Auth::user()->status == 'blacklist') {
            return Redirect::back()->with('message','Error you are blacklisted');
        }
        
        // Read values from input
        $idProduct = Input::get('idProduct');
        $product = Product_auction::find($idProduct);
        
        // Check if auction has been closed
        if($product->isend == true)
        {
            return Redirect::back()->with('message','Error: auction has been closed');
        }


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
        if(!Auth::check())
            return View::make("perdtye/login");
        // Check if blacklisted
        if(Auth::user()->status == 'blacklist') {
            return Redirect::back()->with('message','Error: you are blacklisted');
        }

        // Read values from input
        $bid = Input::get('maxbid_input');
        $idProduct = Input::get('idProduct');
        $product = Product_auction::find($idProduct);

        // Check if auction has been closed
        if($product->isend == true)
        {
            return Redirect::back()->with('message','Error: auction has been closed');
        }

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
			$winner = Auth::user();
            $product = Product_auction::find($idProduct);
			$product->current_price = $product->current_price + $product->bidding_range;
	        $product->current_winner = Auth::user()->idmember;
	        $product->save();
		}

		else {
			$win_list = $bid_list->take(2);
			$winner = $win_list->first();
			$runnerup = $win_list->last();

            if($winner->idmember != $runnerup->idmember){
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
                EmailController::sendBidLostEmail($runnerup->idmember,$product);

            }
			
            
        }

        if($winner->idmember == Auth::user()->idmember){
           return Redirect::back()->with('message','Placed bid successfully. You win !');
       }
       else
       {	
			// send email to previous winner
           return Redirect::back()->with('message','Placed bid successfully. You lose !');
       }
	}

    public function endAuction()
    {   
        // Take 5 due to closed auctions a time to avoid session timeout
        $open_auctions = Product_auction::whereRaw('TIME_TO_SEC(TIMEDIFF(now(), end_time)) > 0')->where('isend','=',false)->get()->take(5);
        foreach ($open_auctions as $el)
        {
            // Verify if there is winner
            if($el->current_winner != null)
            {
                $transaction = new Transaction;
                $transaction->idseller = Product::find($el->idproduct_auction)->idseller;
                $transaction->idmember = $el->current_winner;
                $transaction->idproduct = $el->idproduct_auction;
                $transaction->price = $el->current_price;
                $transaction->quantity = 1;
                $transaction->status = 'waiting';
                $transaction->save();

                EmailController::sendAuctionEndWinnerEmail($el->current_winner,$el->idproduct_auction);
                EmailController::sendInvoice(Member::find($el->current_winner,$el->idproduct_auction,1,$el->current_price,$transaction->idseller);

                // Get Looser list
                $auction_list = Auction_list::where('idproduct_auction','=',$el->idproduct_auction)->get();
                $looser_list = array();
                foreach ($auction_list as $auction_offer){
                    $looser_list[] = $auction_offer->idmember;
                }
                $looser_send_list = array_unique($looser_list);
                $looser_send_list = array_diff($looser_send_list, array($el->current_winner));

                EmailController::sendToAllLooser($looser_send_list,$el->idproduct_auction);
            }
            // Close auction
            $el->isend = true;
            $el->save();
            

        }
        // Refresh the page
        return View::make('perdtye/endauction')->with('open_auctions', $open_auctions);
    }

}