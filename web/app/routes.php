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

Route::get('/', 'HomeController@showIndex');

Route::get('/login', function()
{
	return View::make('user/login');
});

Route::post('/login', function()
{
	$user_username = Input::get('username');
	$user_password = Input::get('password');

	$rules = array(
		'username' => 'required',
		'password' => 'required'
	);

	$validate = Validator::make(array('username' => $user_username, 'password' => $user_password), $rules);

	if($validate->fails())
	{

		$msg = $validate->messages();

		return Redirect::to('/')
			->withErrors($msg)
			->withInput();
	}

	if(Auth::attempt(array('username' => $user_name, 'password' => $user_password)))
	{

		return Redirect::to('/');
	}

	return Redirect::to('/login')->with('message', 'Username and Password do not match');
});

Route::resource('posts', 'PostsController');
