<?php

class SearchController extends BaseController {

	
	public static $auction_category = 'Auction';
	public static $direct_category = 'Direct';
	public static $all_category = 'All';
	
	public function index()
	{
		return View::make("search");
	}

	public function store()
	{
		$keyword = Input::get('keyword_input');
		$category = Input::get('category_input');
		//$products = Product::where('product_name', 'LIKE', '%'.$keyword.'%')->get();
		//foreach($products as $product) {
		//	var_dump($product->toJson());
			/*if ($category == $auction_category) {
				var_dump($product->product_auction()->toJson());
			}
			else if ($category == $direct_category) {
				var_dump($product->product_direct()->toJson());
			}*/
		//}
		var_dump("search result");
		var_dump($keyword . $category);
		//return View::make("search");
	}

	protected function isPostRequest()
  	{
    return Input::server("REQUEST_METHOD") == "POST";
  	}

  	
}
