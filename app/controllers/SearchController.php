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
			$result = Product::getProductInfo($keyword);
			foreach ($result as $r){
				$idProduct = $r['idProduct'];
				$picture = Productpicture::where('idProduct','=',$idProduct);
				if($picture->count()>0){
					$r['picURL'] = $picture->first()->picture_url;
				} else {
					$r['picURL'] = '';
				}
				
			}
		}	
		else if($category == $auction_category)
		{
			$result = Product::getProductAuctionInfo($keyword);
			foreach ($result as $r){
				$idProduct = $r['idProduct'];
				$picture = Productpicture::where('idProduct','=',$idProduct);
				if($picture->count()>0){
					$r['picURL'] = $picture->first()->picture_url;
				} else {
					$r['picURL'] = '';
				}
			}
		}
		else if($category == $direct_category)
		{
			$result = Product::getProductDirectInfo($keyword);
			foreach ($result as $r){
				$idProduct = $r['idProduct'];
				$picture = Productpicture::where('idProduct','=',$idProduct);
				if($picture->count()>0){
					$r['picURL'] = $picture->first()->picture_url;
				} else {
					$r['picURL'] = '';
				}
			}
		}
		
		return View::make('perdtye/search')->with('result',$result);

	}


  	
}
