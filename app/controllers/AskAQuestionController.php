 <?php

class AskAQuestionController extends BaseController {

	//  From route:
	// 	Route::get('qa',function()
	// {
	//     return View::make('/perdtye/qa');
	// });

	public function createQAForm()
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

	public function storeAQuestion()
	{
		$idmember = Auth::user()->idmember;
		$topic = Input::get('topic');
		$content = Input::get('content');
		$timestamp = new DateTime;
		$idproduct = (int)Input::get('idproduct');

		$question = new Question;
		$question->idmember = $idmember;
		$question->topic = $topic;
		$question->timestamp = $timestamp;
		$question->content = $content;
		$question->idproduct = $idproduct;
		$question->save();

		return Redirect::back()->with('flash_message','Your question has been sent.');

	}
}
