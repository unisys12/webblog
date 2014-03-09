<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		$posts = Post::all();

		// Loop through the posts results;
		// Grab only the post contents and parse it with Parsedown;
		// When passing content to View, use substr to only display
		// 500 characters of content;
		foreach ($posts as $post) {
			$content = Parsedown::instance()->parse($post->post_content);
		}

		dd($content);

		return View::make('index')->with('posts', $posts)->with('content', $content);
	}

}
