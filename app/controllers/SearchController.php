 <?php

class SearchController extends BaseController {

	
	public function failed()
	{
    //
		return Redirect::to('home');
	}

	// search product_name
	public function search()
	{
		$auction_category = 'auction';
		$direct_category = 'direct';
		$all_category = 'all';
	
		$category = Input::get('category_input');
		$keyword = Input::get('keyword_input');
		$result;
		if($category == $all_category)
		{
			$result = Product::where('product_name', 'LIKE', '%'.$keyword.'%')
						->orWhere('brand', 'LIKE', '%'.$keyword.'%')
						->get();
		}
		else if($category == $auction_category)
		{
			$result = Product::join('product_auction', 'product.idProduct', '=', 'product_auction.idproduct_auction')
            			->where('product_name', 'LIKE', '%'.$keyword.'%')
						->orWhere('brand', 'LIKE', '%'.$keyword.'%')
						->where('type', '=', $category)
						->get();
		}
		else if($category == $direct_category)
		{
			$result = Product::join('product_direct', 'product.idProduct', '=', 'product_direct.idproduct_direct')
            			->where('product_name', 'LIKE', '%'.$keyword.'%')
						->orWhere('brand', 'LIKE', '%'.$keyword.'%')
						->where('type', '=', $category)
						->get();
		}
		
		return View::make('perdtye/search')->with('result',$result);

	}


  	
}
