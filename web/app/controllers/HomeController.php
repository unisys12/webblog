<?php

class HomeController extends BaseController {


	public function showIndex()
	{
		$posts = Post::all();

		$content = Post::parsePostContent();

		return View::make('index')->with('posts', $posts)->with('content', $content);
	}

}
