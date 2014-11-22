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

Route::get('member',function()
{

	return testUser::all();
});

Route::get('test',function()
{
    return DB::connection()->getDatabaseName();
});

Route::get('try',function()
{
    return DB::select('select * from Member', array(1));
});

Route::get('login','SessionController@create');
Route::resource('session','SessionController');

Route::get('createUser',function()
{

    $tst = new testUser;
    $tst->username = 'kkk';
    $tst->password = Hash::make('1234');
    $tst->save();

    // testUser::create([
    //     'username'=>'paekuy',
    //     'password'=>Hash::make('1234'),
    //     // 'email'=>'fuck@pae.in.th',
    //     // 'name'=>'pradinan',
    //     // 'surname'=>'petchre',
    //     // 'phonenumber'=>'0811111111',
    //     // 'status'=>'super' 
    //         ]);

});
