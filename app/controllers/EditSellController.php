 <?php

class EditSellController extends BaseController {

	// 	From route:
	// 	Route::get('editauctionsell',function()
	// {
	//     return View::make('/perdtye/editauctionsell');
	// });
	// Route::get('editdirectsell',function()
	// {
	//     return View::make('/perdtye/editdirectsell');
	// });

	public function editauctionsell()
	{
		return View::make('/perdtye/editauctionsell');
	}
	public function editdirectsell()
	{
		return View::make('/perdtye/editdirectsell');
	}

}
