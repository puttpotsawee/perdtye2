 <?php

class BrowseController extends BaseController {

	
	public function view()	
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$idProduct = Input::get('id');
		$product = Product::find($idProduct);
		$pictures = Productpicture::where('idProduct','=',$idProduct);
		if($product->type == 'auction'){
			$moreDetails = Product_auction::find($idProduct);
			$seller = Member::find($product->idseller);
			


			return View::make('perdtye/auctiontype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
			// return var_dump($product.$moreDetails);

		} elseif($product->type == 'direct') {
			$moreDetails = Product_direct::find($idProduct);
			$seller = Member::find($product->idseller);

			return View::make('perdtye/directtype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
		

		} else {
			return View::make('/');
		}
		

	}

  	
}
