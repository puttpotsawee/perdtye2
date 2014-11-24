 <?php

class PaymentController extends BaseController {

	
	public function viewAuction()
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$idProduct = Input::get('id');
		$product = Product::find($idProduct);
		$moreDetails = Product_auction::find($idProduct);
		$seller = Member::find($product->idseller);
		
		return View::make('perdtye/auctiontype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
			
	}

	public function viewDirect()
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$idProduct = Input::get('id');
		$product = Product::find($idProduct);
		$moreDetails = Product_direct::find($idProduct);
		$seller = Member::find($product->idseller);
		
		return View::make('perdtye/directtype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		
	}

  	
}
