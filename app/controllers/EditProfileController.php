 <?php

class EditProfileController extends BaseController {

	// From route:
	// Route::get('editprofile', 'MemberController@editAccount')->before('auth');
	// Route::post('editprofile', 'MemberController@saveEditedAccount')->before('auth');
	
	public function editAccount()
	{
		return MemberController::editAccount();
	}

	public function saveEditedAccount()
	{
		return MemberController::saveEditedAccount();
	}

}
