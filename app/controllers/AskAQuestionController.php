 <?php

class AskAQuestionController extends BaseController {

	//  From route:
	// 	Route::get('qa',function()
	// {
	//     return View::make('/perdtye/qa');
	// });

	public function createQAForm()
	{
		return View::make('/perdtye/qa');
	}
}
