 <?php

class BrowseController extends BaseController {

	
	public function view($idProduct)
	{
		//return purchase/bidding result
		echo Session::get('message');
		
		$product = Product::where('idProduct', '=', $idProduct)->first();
		$seller = Member::where('idmember', '=', $product->idseller)->first();
		$moreDetails;
		if( $product->type == 'auction') {
			$moreDetails = Product_auction::where('idproduct_auction', '=', $idProduct)->first();
			return View::make('viewProductAuction')->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		}
		else {
			$moreDetails = Product_direct::where('idproduct_direct', '=', $idProduct)->first();
			return View::make('viewProductDirect')->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		}
		
	}

  	
}
