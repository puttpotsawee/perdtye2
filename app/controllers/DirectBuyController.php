 <?php

class DirectBuyController extends BaseController {

	public function buy()
	{
		$quantity = Input::get('quantity_input');
		$product = Product_direct::find($idProduct);
		
		if($product->remaining >= $quantity) {
			$product->remaining = $product->remaining - $quantity;
			$product->save();
			return Redirect::back()->with('message','Purchase Successful !');
		}
		else {
			return Redirect::back()->with('message','Error not enough remaining products in stock');
		}

	}

  	
}
