 <?php

class AccountController extends BaseController {

	public function answer()
	{
		return View::make('/perdtye/answer');
	}
	public function showAccount()
	{
		return MemberController::showAccount();
	}


  	
}
