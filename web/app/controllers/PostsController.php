<?php

class PostsController extends \BaseController {

	public function __construct(Post $post)
	{
		$this->post = $post;
		$this->beforeFilter('csrf', array('on' => 'post', 'except' => 'search'));
		$this->beforeFilter('auth', array('except' => array('show', 'search')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return json_encode($posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $data = Input::all();
		$data = array(

			'post_title'   => Input::get('post_title'),
			'post_desc'    => Input::get('post_desc'),
			'post_content' => Input::get('post_content'),
			'post_author'  => 'Phillip Jackson',
			'post_tags'    => Input::get('post_tags')


		);
		$post = Post::create($data);

		if($post){
			return Redirect::action('HomeController@showIndex');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $post_title
	 * @return Response
	 */
	public function show($id)
	{
		//$post = Post::where('post_title', $post_title)->first();
		//dd($post);
		$post = $this->post->findOrFail($id);
		return View::make('post.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->post->findOrFail($id);
		return View::make('post.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = $this->post->findOrFail($id);

		$changes = Input::all();
		$post->update($changes);

		if($post->update($changes)){
			$content = Parsedown::instance()->parse($post->post_content);
			return View::make('post.show')->with('post', $post)
										  ->with('content', $content)
										  ->with('title', $id);
		}else{
			return View::make('post.edit', array('post' => $this->$post, 'id' => $id));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $tag
	 * @return Response
	 */
	public function search()
	{
		// Find all posts with a given tag
		$tags = Input::get('search');

		$posts = $this->post->where('post_tags', 'like', "%$tags%")->get();
		$posts->sortByDesc('id');

		return View::make('post.search')->with('posts', $posts);
	}

}
