 <?php

class SearchController extends BaseController {

	
	public function index()
	{
		return View::make("search");
	}

	// search product_name
	public function search()
	{
		$auction_category = 'auction';
		$direct_category = 'direct';
		$all_category = 'all';
	
		$category = Input::get('category_input');
		$keyword = Input::get('keyword_input');
		
		//Search product by name or brand
		$result = Product::where('product_name', 'LIKE', '%'.$keyword.'%')
						->orWhere('brand', 'LIKE', '%'.$keyword.'%');
		
		//Filter by catogory (auction or direct)
		if($category == $auction_category || $category == $direct_category)
		{
			$result = $result->where('type', '=', $category);
		}

		$result = $result->get();
		
		return View::make('searchresult')->with('result',$result);

	}


  	
}
