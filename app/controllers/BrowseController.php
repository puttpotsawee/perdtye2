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
			


			return View::make('perdtye/auctiontype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
			// return var_dump($product.$moreDetails);

		} elseif($product->type == 'direct') {
			$moreDetails = Product_direct::find($idProduct);
			$seller = Member::find($product->idseller);

			return View::make('perdtye/directtype')
			->with(array('product' => $product, 'details' => $moreDetails, 'seller' => $seller,'pictures'=>$pictures));
		

		} else {
			return View::make('/');
		}
		

	}

	public function viewTopItem(){
		$sendProduct = new SplFixedArray(9);
		$i=0;
		$productList = Product::orderBy('idProduct', 'desc')->get()->take(9);
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
			$i++;
		}
		// return $productList;
		return View::make('perdtye/viewItemList')->with('sendProduct',$sendProduct);

	}

  	
}
