 <?php

class BrowseController extends BaseController {

	
	public function view()	
	{
		//return purchase/bidding result
		echo Session::get('message');
		if(!Input::has('id')){
			return Redirect::to('/');
		}
		
		$idProduct = Input::get('id');
		$product = Product::find($idProduct);
		$pictures = Productpicture::where('idProduct','=',$idProduct)->get();

		if($product->type == 'auction'){
			$moreDetails = Product_auction::find($idProduct);
			$seller = Member::find($product->idseller);
			$product_auction = Product_auction::where('idproduct_auction','=',$idProduct)->get()->first();
			$current_winner = Member::find($product_auction->current_winner);
			
			// return $current_winner;
			return View::make('perdtye/auctiontype')
			->with(array('hasCurrentWinner' => $product_auction->current_winner,'current_winner' => $current_winner, 'product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
			
		} elseif($product->type == 'direct') {
			$moreDetails = Product_direct::find($idProduct);
			$seller = Member::find($product->idseller);

			return View::make('perdtye/directtype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
		

		} else {
			return Redirect::to('/');
		}
		

	}

	public function viewTopItem(){
		$sendProduct = new SplFixedArray(9);
		$i=0;
		$productList = Product::orderBy('idProduct', 'desc')->get()->take(9);
		// echo $productList;
		foreach($productList as $product){
			$idProduct = $product->idProduct;
				$picture = Productpicture::where('idProduct','=',$idProduct);
				if($picture->count()>0){
					$pictureURL = $picture->first()->picture_url;
				} else {
					$pictureURL = '';
				}
			if($product->type=='direct'){
				$price = Product_direct::find($product->idProduct)->price;
				
			} elseif ($product->type=='auction'){
				$price = Product_auction::find($product->idProduct)->current_price;
			}
			$send = array('product'=>$product,'price'=>$price,'picture'=>$pictureURL);
			
			// $product['price'] = $price;
			// $product['picture'] = $pictureURL;
			$sendProduct[$i]=$send;
			// echo $i;
			$i++;
		}
		// return dd($sendProduct);
		return View::make('perdtye/viewItemList')->with('sendProduct',$sendProduct);

	}

  	
}
