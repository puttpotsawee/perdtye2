 <?php

class ReportController extends BaseController {

	// From route:
	// Route::get('report','MemberController@report')->before('auth');
	//	Route::get('report',function()
	//{
	//    return View::make('/perdtye/report');
	//});
	// Route::get('reportgood',function()
	//{
	//    return View::make('/perdtye/reportgood');
	//});
	// Route::get('reportsubmit',function()
	//{
	//    return View::make('/perdtye/reportsubmit');
	//});
	public function report()
	{
		return View::make('/perdtye/report');
	}
	public function storeReport()
	{
		$topic =  Input::get('topic');
		$content = Input::get('content');
		$member = Auth::user();
		$idmember = $member->idmember;

		$report = new Report;
		$report->topic = $topic;
		$report->content = $content;
		$report->idmember = $idmember;
		$report->save();

		return Redirect::back()->with('flash_message','Your report has been saved.');
	}
	public function reportgood()
	{
		return View::make('/perdtye/reportgood');
	}
	public function reportsubmit()
	{
		return View::make('/perdtye/reportsubmit');
	}

}
