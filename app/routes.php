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
	return View::make('hello');
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
    return View::make('home')->with('name','Potsawee Vechpanich');
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


Route::get('profile/activate/{username}/{token}','MemberController@activateMember');


Route::get('sendMail',function()
{
    
});


Route::get('test', function()
{
 	return Member::all();
});
Route::resource('signup','SignupController');


Route::get('kuy',function()
{
    return View::make('home');
});
