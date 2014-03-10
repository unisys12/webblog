<?php

class HomeController extends BaseController {


	public function showIndex()
	{
		$posts = Post::all();

		return View::make('index')->with('posts', $posts);
	}

}
