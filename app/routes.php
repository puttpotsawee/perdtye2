<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');
    return View::make('/perdtye/index');
});

Route::get('users', function()
{
    return View::make('users');
});

Route::get('pae', function()
{
    return 'pae!!';
});
Route::get('home',function()
{
    return Redirect::to('/');
});

Route::get('email',function()
{
    return View::make('emails.welcome')->with('name','Potsawee Vechpanich');
});

Route::get('member',function()
{

	return Member::all();
});

Route::get('test',function()
{
    return DB::connection()->getDatabaseName();
});

Route::get('try',function()
{
    return DB::select('select * from testUser', array(1));
});

// Route::get('testClass','MemberController@showProfile');

Route::get('login','SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session','SessionController');

Route::get('account','AccountController@showAccount')->before('auth');

Route::get('editaccount', 'EditProfileController@editAccount')->before('auth');
Route::post('editaccount', 'EditProfileController@saveEditedAccount')->before('auth');


Route::get('createUser',function()
{
    $member = new Member;
    $member->username='paekuy2';
    $member->password=Hash::make('1234');
    $member->email='fuck@pae.in.th';
    $member->name='pradinan';
    $member->surname='petchre';
    $member->phonenumber='0811111111';
    $member->status='super';
    $member->save();
    
});
Route::get('signup', 'SignupController@index');
Route::post('signup','SignupController@signup');


Route::get('account/activate/{username}/{token}','MemberController@activateMember');


Route::get('sendMail',function()
{
    
});


Route::get('test', function()
{
 	return Member::all();
});

// Routing blade
// Route::get('home',function()
// {
//     return View::make('/perdtye/index');
// });
// Route::get('login',function()
// {
//     return View::make('/perdtye/login');
// });


Route::get('qa', 'AskAQuestionController@qa');

Route::get('auctiontype',function()
{
    return View::make('/perdtye/auctiontype');
});
Route::get('directsell','SellerController@directsell')->before('auth')->before("seller");
Route::post('directsell','SellerController@submitDirectsell')->before('auth')->before("seller");
Route::get('auctionsell','SellerController@auctionsell')->before('auth')->before("seller");
Route::post('auctionsell','SellerController@submitAuctionsell')->before('auth')->before("seller");

Route::get('directtype',function()
{
    return View::make('/perdtye/directtype');
});
Route::get('editauctionsell', 'EditSellController@editauctionsell');
Route::get('editdirectsell', 'EditSellController@editdirectsell');

Route::get('feedback','GiveFeedbackController@seeFeedback')->before('auth');

Route::get('forgot', 'ForgotPassController@forgot');
Route::get('statusforgot', 'ForgotPassController@statusforgot');

Route::get('report', 'ReportController@report')->before('auth');
Route::get('reportgood', 'ReportController@reportgood');
Route::get('reportsubmit', 'ReportController@reportsubmit');

Route::get('sellregister',function()
{
    return View::make('/perdtye/sellregister');
});

Route::get('sellconfirm',function()
{
    return View::make('/perdtye/sellconfirm')->with(Seller::find(1));
});
Route::get('confirmsuccess',function()
{
    return View::make('/perdtye/confirmsuccess');
});
Route::get('answer', 'AccountController@answer');
// Routing Blade

//Route to search
Route::get('search', 'SearchController@failed');
Route::post('search', 'SearchController@search');
//Route to item details
Route::get('view', 'BrowseController@view');
//Route to buy/bid request
Route::post('placebid', 'AuctionController@placeBid');
Route::post('maxbid', 'AuctionController@maxBid');
Route::post('direct', 'DirectBuyController@buy');
Route::get('transaction',function()
{

    return Transaction::all();
});

Route::post('paynow', 'PaymentController@paynow');
Route::post('confirm', 'PaymentController@confirm');
Route::get('date',function()
{
    date_default_timezone_set('Asia/Singapore');
    return $date = date('Y-m-d H:i:s', time());
});
