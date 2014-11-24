 <?php

class DirectBuyController extends BaseController {

	public function buy()
	{
		$quantity = Input::get('quantity_input');
		$idProduct = Input::get('idProduct');
		$product = Product_direct::find($idProduct);
		
		if($product->remaining >= $quantity) {
			$product->remaining = $product->remaining - $quantity;
			$product->save();

			DB::table('Transaction')->insert(array('idseller' => $product->product()->idseller, 'idproduct' => $idProduct, 'price' => $product->price, '')
);
		}
		else {
			return Redirect::back()->with('message','Error not enough remaining products in stock');
		}

	}

  	
}
