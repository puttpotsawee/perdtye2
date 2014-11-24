 <?php

class DirectBuyController extends BaseController {

	public function buy()
	{
		$quantity = Input::get('quantity_input');
		$idProduct = Input::get('idProduct');
		$product = Product::find($idProduct);
		$details = Product_direct::find($idProduct);
		$seller = Member::find($product->idseller);
		
		if($details->remaining >= $quantity) {
			//$product->remaining = $product->remaining - $quantity;
			//$product->save();

			return View::make('perdtye/sellconfirm')
			->with(array('product' => $product, 'details' => $details, 'seller' => $seller, 'quantity' => $quantity));
			//return Redirect::back()->with('message','Purchase successful');
		}
		else {
			return Redirect::back()->with('message','Error not enough remaining products in stock');
		}

	}

  	
}
