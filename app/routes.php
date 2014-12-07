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
Route::get('/', 'BrowseController@viewTopItem');
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
Route::get('account/resetpass/{username}/{token}','MemberController@resetPasswordForm');
Route::post('account/resetpass','MemberController@resetPassword');
// Log in
Route::get('login','SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session','SessionController');
// Forgot Password
Route::get('forgot', 'MemberController@forgotPassword');
Route::post('forgot', 'MemberController@sendEmailResetPassword');
// View Account
Route::get('account','AccountController@showAccount')->before('auth');
// Edit Account
Route::get('editaccount', 'AccountController@editAccount')->before('auth');
Route::post('editaccount', 'AccountController@saveEditedAccount')->before('auth');
// Upgrade to seller
Route::get('sellregister', 'SignupController@sellregister')->before('auth');
// ---------------------------------------------------------------------------


// Route associated with Item Package ----------------------------------------
// Sell Direct-Type Item
Route::get('directsell','SellerController@directsell')->before('auth')->before("seller");
Route::post('directsell','SellerController@submitDirectsell')->before('auth')->before("seller");
// Sell Auction-Type Item
Route::get('auctionsell','SellerController@auctionsell')->before('auth')->before("seller");
Route::post('auctionsell','SellerController@submitAuctionsell')->before('auth')->before("seller");
//Edit Direct-Type Item
Route::get('editdirectsell', 'EditSellController@editdirectsell')->before('auth')->before("seller");
//Edit Auction-Type Item
Route::get('editauctionsell', 'EditSellController@editauctionsell')->before('auth')->before("seller");
// Search for Item
Route::get('search', 'SearchController@failed');
Route::post('search', 'SearchController@search');
// View Item Details
Route::get('view', 'BrowseController@view');
// Place Bid
Route::post('placebid', 'AuctionController@placeBid')->before('auth');
// Set Max Bid
Route::post('maxbid', 'AuctionController@maxBid')->before('auth');
// Buy Item
Route::post('direct', 'DirectBuyController@buy')->before('auth');


// Route associated with Transaction Package ---------------------------------
// Make Payment
Route::post('paynow', 'PaymentController@paynow')->before('auth');
// Pospone Payment
Route::post('confirm', 'PaymentController@confirm')->before('auth');
// ---------------------------------------------------------------------------


// Route associated with Support Package -------------------------------------
// Report a Problem
Route::get('report', 'ReportController@report')->before('auth');
Route::post('report', 'ReportController@storeReport')->before('auth');

Route::get('reportgood', 'ReportController@reportgood');
Route::get('reportsubmit', 'ReportController@reportsubmit');
// Ask and answer a Question
Route::get('qa', 'AskAQuestionController@createQAForm')->before('auth');
Route::post('qa', 'AskAQuestionController@storeAQuestion')->before('auth');
Route::get('answer', 'AccountController@answer')->before('auth');
// Give Feedback
Route::get('feedback','GiveFeedbackController@giveFeedback')->before('auth');
Route::post('feedback','GiveFeedbackController@storeFeedback')->before('auth');

// --------------------------------------------------------------------------




// Test route ---------------------------------------------------------------
Route::get('users', function()
{
    return View::make('users');
});
Route::get('html', function(){
    return View::make('perdtye/resetPasswordConfirm')->with('name','pot');
    // return View::make('perdtye/confirmsuccess')->with('email','ppp@g.com');
});

Route::get('pae', function()
{
    return 'pae!!';
});

Route::get('member',function()
{

    return Member::all();
});

Route::get('product',function()
{

    return Product::all();
});

Route::get('product_direct',function()
{

    return Product_direct::all();
});

Route::get('product_auction',function()
{

    return Product_auction::all();
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
    return View::make('emails.mailResetPassword')->with('name','Potsawee Vechpanich')->with('link','http://www.google.co.th');
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

Route::get('testClass','MemberController@showProfile');

// Backgroud service: End Auction
Route::get('endauction', 'AuctionController@endAuction');
//---------------------------------------------------------------------------

Route::get('webboard/','AskAQuestionController@answerQuestion')->before('auth');
Route::post('webboard/','AskAQuestionController@answerAnsQuestion')->before('auth');

