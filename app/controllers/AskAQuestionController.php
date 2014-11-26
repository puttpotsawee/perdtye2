 <?php

class AskAQuestionController extends BaseController {

	//  From route:
	// 	Route::get('qa',function()
	// {
	//     return View::make('/perdtye/qa');
	// });

	public function qa()
	{
		if(!Input::has('id')){
            return Redirect::to('/');
        }
        $id = Input::get('id');
        $product = Product::find($id);
        $seller = Member::find($product->idseller);
        $picture = Productpicture::where('idProduct','=',$id)->first();

        return View::make('/perdtye/qa')->with(array('product'=>$product,'seller'=>$seller,'picture'=>$picture->picture_url));
	}
}
