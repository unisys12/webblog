<?php

class HomeController extends BaseController {


	public function showIndex()
	{
		protected $content;
		$posts = Post::all();

		// Loop through the posts results;
		// Grab only the post contents and parse it with Parsedown;
		// When passing content to View, use substr to only display
		// 500 characters of content;
		foreach ($posts as $post) {
			$content = Parsedown::instance()->parse($post->post_content);
		}

		return View::make('index')->with('posts', $posts)->with('content', $content);
	}

}
