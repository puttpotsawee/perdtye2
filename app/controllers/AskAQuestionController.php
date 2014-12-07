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

		// return Redirect::back()->with('flash_message','Your question has been sent.');
		return Redirect::to('/view?id='.$idproduct);

	}
	public function answerQuestion()
	{
		if(!Input::has('idQ')){
            return Redirect::to('/');
        }
		// $idmember = Auth::user()->idmember;
		$questionid = Input::get('idQ');
		$question = Question::find($questionid);
		$member = Member::find($question->idmember);
		$product = Product::find($question->idproduct);
		$seller = Member::find($product->idseller);
		$picture = Productpicture::where('idProduct','=',$product->idProduct)->get()->first();
		$answer = Answer::where('idquestion','=',$questionid)->get();
		// $ansmember = Member::find($answer->idmember);
		// return $answer;
		if((Auth::user()->idmember==$member->idmember||Auth::user()->idmember==$seller->idmember)){
			return View::make('/perdtye/webboard')->with(array('product'=>$product,'seller'=>$seller,'question'=>$question,'picture'=>$picture->picture_url,'answer'=>$answer));
		} else {
			// return Redirect::back()->with('flash_message','Your question has been sent.');
			return Redirect::to('/');
			// return Auth::user()->idmember."-".$seller->idmember;
		}
		

	}
	public function answerAnsQuestion(){
		$idmember = Auth::user()->idmember;
		$content = Input::get('content');
		$idquestion = Input::get('idquestion');

		$answer = new Answer;
		$answer->idmember = $idmember;
		$answer->idquestion = $idquestion;
		$answer->content = $content;
		$answer->save();
		return Redirect::to('/webboard?idQ='.$idquestion);
	}
}
