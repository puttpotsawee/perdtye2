 <?php

class PaymentController extends BaseController {

	
	public function paynow()
	{
		$name = Auth::user()->name;
		$surname = Auth::user()->surname;
		$receiver = Auth::user()->idmember;
		$idmember = Auth::user()->idmember;

		$idProduct = Input::get('idProduct');
		$quantity = Input::get('quantity');
		$product = Product::find($idProduct);
		
		$moreDetails = Product_direct::find($idProduct);
		$moreDetails->decrease($quantity);
		$moreDetails->save();
		
		$transaction = new Transaction;
		$transaction->idseller = $product->idseller;
		$transaction->idmember = $idmember;
		$transaction->idproduct = $idProduct;
		$transaction->price = $moreDetails->price*$quantity;
		$transaction->quantity = $quantity;
		$transaction->status = 'paid';
		$transaction->save();

		return Redirect::To('account');
			
	}

  	public function confirm()
	{
		$name = Auth::user()->name;
		$surname = Auth::user()->surname;
		$receiver = Auth::user()->idmember;
		$idmember = Auth::user()->idmember;

		$idProduct = Input::get('idProduct');
		$quantity = Input::get('quantity');
		$product = Product::find($idProduct);
		$moreDetails = Product_direct::find($idProduct);
		
		$moreDetails->remaining = $moreDetails->remaining-$quantity;
		$moreDetails->save();
		
		$transaction = new Transaction;
		$transaction->idseller = $product->idseller;
		$transaction->idmember = $idmember;
		$transaction->idproduct = $idProduct;
		$transaction->price = $moreDetails->price*$quantity;
		$transaction->quantity = $quantity;
		$transaction->status = 'waiting';
		$transaction->save();

		// return Redirect::back()->with('message','Payment pending !');
		return Redirect::To('account')->with('message','Payment pending !');
			
	}

}
