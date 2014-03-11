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

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/upto', function()
{
	return View::make('up');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});

Route::get('/login', function()
{
	return View::make('user.login');
});

Route::post('/login', function()
{
	$data = Input::except('_token', '_url');

	$rules = array(
		'username' => 'required',
		'password' => 'required'
	);

	$validate = Validator::make($data, $rules);

	if($validate->fails())
	{

		$msg = $validate->messages();

		return Redirect::to('/login')
			->withErrors($msg)
			->withInput();
	}

	if(Auth::attempt($data))
	{
		return Redirect::intended('user.profile');
	}

	return Redirect::to('/login')->with('message', 'Username and Password do not match');
});

Route::resource('posts', 'PostsController');
