 <?php

class BrowseController extends BaseController {

	
	public function view($idProduct)
	{
		$product = Product::where('idProduct', '=', $idProduct)->first();
		$seller = Member::where('idmember', '=', $product->idseller)->first();
		$moreDetails;
		if( $product->type == 'auction') {
			$moreDetails = Product_auction::where('idproduct_auction', '=', $idProduct)->first();
			return View::make('viewItemAuction')->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		}
		else {
			$moreDetails = Product_direct::where('idproduct_direct', '=', $idProduct)->first();
			return View::make('viewItemDirect')->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller));
		}
		
	}



  	
}
