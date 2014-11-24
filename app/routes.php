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
// Route::get('home',function()
// {
//     return View::make('home')->with('name','Potsawee Vechpanich');
// });

Route::get('email',function()
{
    return View::make('emails.confirmation')->with(array('name'=>'Potsawee Vechpanich','link'=>'http://www.google.co.th'));
});
Route::get('emails',function()
{
    return View::make('emails/mailLayout');
});
Route::get('member',function()
{

	$thisUser = Member::whereUsername('driley25')->get()->first();
    return $thisUser->phonenumber;
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

Route::get('profile','MemberController@showProfile')->before('auth');
Route::get('profile/edit','MemberController@editProfile')->before('auth');
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
    $member = new Member;
    $member->username='paekuy2';
    $member->password=Hash::make('1234');
    $member->email='junrai82@gmail.com';
    $member->name='Pradinaan';
    $member->surname='P.';
    $member->phonenumber='0811111111';
    $member->status='super';
    $member->confirm_token = 'hogwiheoighweoighweio';

    EmailController::sendConfirmationEmail($member);
    return 'done';


});

Route::get('test', function()
{
 	return Member::all();
});

Route::get('path', function()
{
    return App::make('url')->to('/');
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
Route::get('search',function()
{
    return View::make('/perdtye/search');
});
Route::get('account',function()
{
    return View::make('/perdtye/account');
});
Route::get('qa',function()
{
    return View::make('/perdtye/qa');
});
Route::get('auctionsell',function()
{
    return View::make('/perdtye/auctionsell');
});
Route::get('auctiontype',function()
{
    return View::make('/perdtye/auctiontype');
});
Route::get('directsell',function()
{
    return View::make('/perdtye/directsell');
});
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
Route::get('editprofile',function()
{
    return View::make('/perdtye/editprofile');
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

Route::get('pending',function()
{
    return View::make('/perdtye/pending');

Route::get('sellconfirm',function()
{
    return View::make('/perdtye/sellconfirm');

});
// Routing Blade

//Route to search
Route::get('search', 'SearchController@index');
Route::post('search', 'SearchController@search');
//Route to item details
Route::get('item/{idProduct}', 'BrowseController@view');
//Route to buy/bid request
<<<<<<< HEAD
Route::post('placebid', 'AuctionController@placeBid');
Route::post('maxbid', 'AuctionController@maxBid');
Route::post('direct', 'DirectBuyController@buy');
Route::get('transaction',function()
{

    return Transaction::all();
});
=======
Route::post('item/{idProduct}', 'DirectBuyController@buy');
Route::put('item/{idProduct}', 'AuctionController@bid');

//search
>>>>>>> origin/master
