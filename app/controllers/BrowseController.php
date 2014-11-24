 <?php

class BrowseController extends BaseController {

	
	public function viewAuction($idProduct)
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$product = Product::find($idProduct);
		$moreDetails = Product_auction::find($idProduct);
		$seller = Member::find($product->idseller);
		
		return View::make('perdtye/auctiontype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
			
	}

	public function viewDirect($idProduct)
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$product = Product::find($idProduct);
		$moreDetails = Product_direct::find($idProduct);
		$seller = Member::find($product->idseller);
		
		return View::make('perdtye/directtype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		
	}

  	
}
