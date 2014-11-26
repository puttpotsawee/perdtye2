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

Route::get('account','MemberController@showAccount')->before('auth');
Route::get('editprofile', 'MemberController@editAccount')->before('auth');
Route::get('report','MemberController@report')->before('auth');
Route::get('feedback','MemberController@seeFeedback')->before('auth');




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
Route::get('signup',function()
{
    return View::make('/perdtye/signup');
});
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


Route::get('qa',function()
{
    return View::make('/perdtye/qa');
});

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
Route::get('editauctionsell',function()
{
    return View::make('/perdtye/editauctionsell');
});
Route::get('editdirectsell',function()
{
    return View::make('/perdtye/editdirectsell');
});

Route::get('feedback',function()
{
    return View::make('/perdtye/feedback');
});
Route::get('forgot',function()
{
    return View::make('/perdtye/forgot');
});
Route::get('report',function()
{
    return View::make('/perdtye/report');
});
Route::get('reportgood',function()
{
    return View::make('/perdtye/reportgood');
});
Route::get('reportsubmit',function()
{
    return View::make('/perdtye/reportsubmit');
});
Route::get('sellregister',function()
{
    return View::make('/perdtye/sellregister');
});
Route::get('statusforgot',function()
{
    return View::make('/perdtye/statusforgot');
});
Route::get('sellconfirm',function()
{
    return View::make('/perdtye/sellconfirm')->with(Seller::find(1));
});
Route::get('confirmsuccess',function()
{
    return View::make('/perdtye/confirmsuccess');
});
Route::get('answer',function()
{
    return View::make('/perdtye/answer');
});
// Routing Blade

//Route to search
Route::get('search', 'SearchController@failed');
Route::post('search', 'SearchController@search');
//Route to item details
Route::get('auction', 'BrowseController@viewAuction');
Route::get('direct', 'BrowseController@viewDirect');
//Route to buy/bid request
Route::post('placebid', 'AuctionController@placeBid');
Route::post('maxbid', 'AuctionController@maxBid');
Route::post('direct', 'DirectBuyController@buy');
Route::get('transaction',function()
{

    return Transaction::all();
});
/*
Route::post('paynow', 'PaymentController@paynow');
Route::post('confirm', 'PaymentController@confirm');
Route::get('date',function()
{
    date_default_timezone_set('Asia/Singapore');
    return $date = date('Y-m-d H:i:s', time());
});*/
