 <?php

class GiveFeedbackController extends BaseController {

	// From route:
	// Route::get('feedback','MemberController@seeFeedback')->before('auth');
	// Route::get('feedback',function()
	//{
	//    return View::make('/perdtye/feedback');
	//});

	public function seeFeedback()
	{
		return View::make('/perdtye/feedback');
	}


}
