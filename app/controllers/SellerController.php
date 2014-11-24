 <?php

class SellerController extends BaseController {

	
	public function failed()
	{
    //
		return Redirect::to('home');
	}

	// search product_name
	public function directsell(){
		return View::make('perdtye/directsell');
	}

	public function submitDirectsell(){
		$product = new Product;
		$product->idseller = Auth::user()->idmember;
		$product->type = 'direct';
		$product->product_name = Input::get('product_name');
		$product->brand = Input::get('brand');
		$product->model = Input::get('model');
		$product->property = Input::get('property');
		$product->dimension = Input::get('dimension');
		$product->condition = Input::get('condition');
		$product->defect = Input::get('defect');
		$product->missing_part = Input::get('missing_part');
		$product->payment_method = Input::get('payment_method');
		$product->refund_policy = Input::get('refund_policy');
		$product->return_charge = Input::get('return_charge');
		$product->packaging_method = Input::get('packaging_method');
		$product->packaging_charge = Input::get('packaging_charge');
		$product->shipping_method = Input::get('shipping_method');
		$product->shipping_fee = Input::get('shipping_fee');
		$product->save();

		$insertedId = $product->idProduct;


		$product_direct = new Product_direct;
		$product_direct->idproduct_direct = $insertedId;
		$product_direct->price = Input::get('price');
		$product_direct->quantity = Input::get('quantity');
		$product_direct->remaining = Input::get('quantity');
		$product_direct->save();

		
		return "done";

	}
	public function auctionsell(){
		return View::make('/perdtye/auctionsell');
	}
	public function submitAuctionsell(){
		$product = new Product;
		$product->idseller = Auth::user()->idmember;
		$product->type = 'auction';
		$product->product_name = Input::get('product_name');
		$product->brand = Input::get('brand');
		$product->model = Input::get('model');
		$product->property = Input::get('property');
		$product->dimension = Input::get('dimension');
		$product->condition = Input::get('condition');
		$product->defect = Input::get('defect');
		$product->missing_part = Input::get('missing_part');
		$product->payment_method = Input::get('payment_method');
		$product->refund_policy = Input::get('refund_policy');
		$product->return_charge = Input::get('return_charge');
		$product->packaging_method = Input::get('packaging_method');
		$product->packaging_charge = Input::get('packaging_charge');
		$product->shipping_method = Input::get('shipping_method');
		$product->shipping_fee = Input::get('shipping_fee');
		$product->save();

		$insertedId = $product->idProduct;


		$product_auction = new Product_auction;
		$product_auction->idproduct_auction = $insertedId;

		$store_start_time = DateTime::createFromFormat('d/m/Y H:i',Input::get('start_date')." ".Input::get('start_time'));
		$store_end_time = DateTime::createFromFormat('d/m/Y H:i',Input::get('end_date')." ".Input::get('end_time'));

		$product_auction->start_time = $store_start_time;
		$product_auction->end_time = $store_end_time;
		$product_auction->minimum_bid = Input::get('minimum_bid');
		$product_auction->bidding_range = Input::get('bidding_range');
		$product_auction->current_price = Input::get('minimum_bid');
		$product_auction->save();

		return "done";


		
	}


  	
}
