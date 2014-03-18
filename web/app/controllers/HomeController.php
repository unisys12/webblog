<?php

class HomeController extends BaseController {

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function showIndex()
	 {
		$posts = Post::all();

		return View::make('index')->with('posts', $posts);
   }

}
