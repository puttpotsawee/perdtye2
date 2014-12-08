<?php

class EmailController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public static function sendConfirmationEmail($user)
	{
		$username = $user->username;
		$name = $user->name;
		$token = $user->confirm_token;
		$email = $user->email;


		$link = App::make('url')->to('/')."/account/activate/".$username."/".$token;
		$data = array('name'=>$name,'link'=>$link);
		



		Mail::send('emails.confirmation', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('Email Confirmation from PerdTye.com');
		});
	}
	public static function sendResetPasswordEmail($user)
	{
		$username = $user->username;
		$name = $user->name;
		$token = $user->confirm_token;
		$email = $user->email;

		$link = App::make('url')->to('/')."/account/resetpass/".$username."/".$token;
		$data = array('name'=>$name,'link'=>$link);

		Mail::send('emails.mailResetPassword', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('Resetting password for your PerdTye.com account');
		});
	}


	public static function sendBidLostEmail($idMember,$product_auction)
	{
		$user = Member::find($idMember);
		$username = $user->username;
		$name = $user->name;
		$token = $user->confirm_token;
		$email = $user->email;


		// echo $user;
		$product = Product::find($product_auction->idproduct_auction);
		// echo $product;
		// echo $product_auction;


		$link = App::make('url')->to('/')."/view?id=".$product->idProduct;
		$data = array('name'=>$name,'link'=>$link,'product'=>$product,'product_auction'=>$product_auction);
		Mail::send('emails.notifyOutbid', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('You have been outbidded');
		});
	
	}

	public static function sendAuctionEndWinnerEmail($idMember,$idProduct)
	{
		$user = Member::find($idMember);
		$username = $user->username;
		$name = $user->name;
		// $token = $user->confirm_token;
		$email = $user->email;

		$product = Product::find($idProduct);
		$product_auction = Product_auction::find($idProduct);

		$link = App::make('url')->to('/')."/view?id=".$product->idProduct;
		$data = array('name'=>$name,'link'=>$link,'product'=>$product,'product_auction'=>$product_auction);
		echo 'email winner:'.$user;
		Mail::send('emails.notifyOutbid', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('You have won the item');
		});

	}
	public static function sendAuctionEndLooserEmail($idMember,$product)
	{
		$user = Member::find($idMember);
		$username = $user->username;
		$name = $user->name;
		// $token = $user->confirm_token;
		$email = $user->email;

		// $product = Product::find($idProduct);
		$product_auction = Product_auction::find($product->idProduct);
		
		$link = App::make('url')->to('/')."/view?id=".$product->idProduct;
		$data = array('name'=>$name,'link'=>$link,'product'=>$product,'product_auction'=>$product_auction);
		Mail::send('emails.notifyOutbid', $data, function($message)	use ($email,$name)
		{
			$message->to($email, $name)->subject('You loose the item');
		});

	}

	public static function sendToAllLooser($looser_list,$idProduct)
	{
		$product = Product::find($idProduct);
		foreach ($looser_list as $looser_id) {
			# code...
			// sendAuctionEndLooserEmail($looser_id,$product);
			echo 'email '.$looser_id.' product:'.$product;
			
		}
	}
		
	
	
	
}
