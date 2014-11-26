 <?php

class ForgotPassController extends BaseController {

	// From route
	// Route::get('forgot',function()
	// {
	//     return View::make('/perdtye/forgot');
	// });
	// Route::get('statusforgot',function()
	// {
	//     return View::make('/perdtye/statusforgot');
	// });

	public function forgot()
	{
		return View::make('/perdtye/forgot');
	}
	public function statusforgot()
	{
		return View::make('/perdtye/statusforgot');
	}
	
}
