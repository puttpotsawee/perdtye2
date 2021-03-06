 <?php

class DirectBuyController extends BaseController {

	public function buy()
	{
		if(!Auth::check())
            return View::make("perdtye/login");
        
        $user = Auth::user();
		if($user->status == 'blacklist') {
			return Redirect::back()->with('message','Error you are blacklisted');
		}

		$quantity = Input::get('quantity_input');
		$idProduct = Input::get('idProduct');
		$product = Product::find($idProduct);
		$details = Product_direct::find($idProduct);
		$seller = Member::find($product->idseller);
		$address = Address::where('idmember','=',Auth::user()->idmember)->get()->first();
		$picture = Productpicture::where('idProduct','=',$product->idProduct)->get()->first();

		if($details->remaining >= $quantity) {
			return View::make('perdtye/sellconfirm')
			->with(array('picture'=>$picture, 'user' => $user, 'product' => $product, 'details' => $details, 'seller' => $seller, 'quantity' => $quantity, 'address' => $address));
			//return Redirect::back()->with('message','Purchase successful');
		}
		else {
			return Redirect::back()->with('message','Error not enough remaining products in stock');
		}

	}

  	
}
