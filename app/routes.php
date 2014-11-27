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

// Route to Home Page --------------------------------------------------------
Route::get('/', function()
{
    return View::make('/perdtye/index');
});
Route::get('home',function()
{
    return Redirect::to('/');
});
// ---------------------------------------------------------------------------


// Route associated with Member Package --------------------------------------
// Sign Up
Route::get('signup', 'SignupController@index');
Route::post('signup','SignupController@signup');
// Activate Member
Route::get('account/activate/{username}/{token}','MemberController@activateMember');
// Log in
Route::get('login','SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session','SessionController');
// Forgot Password
Route::get('forgot', 'ForgotPassController@forgot');
Route::get('statusforgot', 'ForgotPassController@statusforgot');
// View Account
Route::get('account','AccountController@showAccount')->before('auth');
// Edit Account
Route::get('editaccount', 'EditProfileController@editAccount')->before('auth');
Route::post('editaccount', 'EditProfileController@saveEditedAccount')->before('auth');
// Upgrade to seller
Route::get('sellregister', 'SignupController@sellregister')->before('auth');;
// ---------------------------------------------------------------------------


// Route associated with Item Package ----------------------------------------
// Sell Direct-Type Item
Route::get('directsell','SellerController@directsell')->before('auth')->before("seller");
Route::post('directsell','SellerController@submitDirectsell')->before('auth')->before("seller");
// Sell Auction-Type Item
Route::get('auctionsell','SellerController@auctionsell')->before('auth')->before("seller");
Route::post('auctionsell','SellerController@submitAuctionsell')->before('auth')->before("seller");
//Edit Direct-Type Item
Route::get('editdirectsell', 'EditSellController@editdirectsell');
//Edit Auction-Type Item
Route::get('editauctionsell', 'EditSellController@editauctionsell');
// Search for Item
Route::get('search', 'SearchController@failed');
Route::post('search', 'SearchController@search');
// View Item Details
Route::get('view', 'BrowseController@view');
// Place Bid
Route::post('placebid', 'AuctionController@placeBid');
// Set Max Bid
Route::post('maxbid', 'AuctionController@maxBid');
// Buy Item
Route::post('direct', 'DirectBuyController@buy');


// Route associated with Transaction Package ---------------------------------
// Make Payment
Route::post('paynow', 'PaymentController@paynow');
// Pospone Payment
Route::post('confirm', 'PaymentController@confirm');
// ---------------------------------------------------------------------------


// Route associated with Support Package -------------------------------------
// Report a Problem
Route::get('report', 'ReportController@report')->before('auth');
Route::get('reportgood', 'ReportController@reportgood');
Route::get('reportsubmit', 'ReportController@reportsubmit');
// Ask and answer a Question
Route::get('qa', 'AskAQuestionController@createQAForm');
Route::get('answer', 'AccountController@answer');
// Give Feedback
Route::get('feedback','GiveFeedbackController@seeFeedback')->before('auth');
// --------------------------------------------------------------------------




// Test route ---------------------------------------------------------------
Route::get('users', function()
{
    return View::make('users');
});

Route::get('pae', function()
{
    return 'pae!!';
});

Route::get('member',function()
{

    return Member::all();
});

Route::get('transaction',function()
{
    return Transaction::all();
});

Route::get('test',function()
{
    return DB::connection()->getDatabaseName();
});

Route::get('try',function()
{
    return DB::select('select * from testUser', array(1));
});

Route::get('email',function()
{
    return View::make('emails.welcome')->with('name','Potsawee Vechpanich');
});

Route::get('sendMail',function()
{
    
});

Route::get('directtype',function()
{
    return View::make('/perdtye/directtype');
});

Route::get('auctiontype',function()
{
    return View::make('/perdtye/auctiontype');
});

Route::get('sellconfirm',function()
{
    return View::make('/perdtye/sellconfirm')->with(Seller::find(1));
});
Route::get('confirmsuccess',function()
{
    return View::make('/perdtye/confirmsuccess');
});

<<<<<<< HEAD
//Route to search
Route::get('search', 'SearchController@failed');
Route::post('search', 'SearchController@search');
//Route to item details
Route::get('view', 'BrowseController@view');
//Route to buy/bid request
Route::post('placebid', 'BiddingController@placeBid');
Route::post('maxbid', 'BiddingController@maxBid');
Route::post('direct', 'DirectBuyController@buy');
Route::get('transaction',function()
{

    return Transaction::all();
});

Route::post('paynow', 'PaymentController@paynow');
Route::post('confirm', 'PaymentController@confirm');
=======
>>>>>>> origin/master
Route::get('date',function()
{
    date_default_timezone_set('Asia/Singapore');
    return $date = date('Y-m-d H:i:s', time());
});

Route::get('testClass','MemberController@showProfile');
//---------------------------------------------------------------------------

