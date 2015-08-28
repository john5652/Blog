<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct(); 
		$this->beforeFilter('auth', array('except' => array('index', 'show'))); 
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $posts = Post::with('user')->paginate(4);
		// return View::make('posts.index')->with('posts', $posts);

		if(Input::has('search')) {
			$search = Input::get('search');
			$posts = Post::with('user')->where('title', 'LIKE', "%{$search}%")
							->orWhere('body', 'LIKE', "%{$search}%")
							->orderBy('title', 'asc')
							->paginate(5);
							if($posts->count() == 0) {
								Session::flash('errorMessage', 'Search not found');
								return Redirect::action('PostsController@index');
							}
			return View::make('posts.index')->with('posts', $posts);
		} else {
			$posts = Post::with('user')->paginate(5);
			return View::make('posts.index')->with('posts', $posts);
		}
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Something went wrong, please refer to the errors listed below:');
	       return Redirect::back()->withInput()->withErrors($validator);
	    }

	     else {
	       	$post= new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = Auth::id(); 
			$post->save();

			Session::flash('successMessage', 'Post created succesfully!');


			return Redirect::action('PostsController@index');
	    }

	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
 
			Session::flash('errorMessage', "Post with id of $id is not found"); 

			App::abort(404); 
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		if(!$post) {

			Session::flash('errorMessage', "Post with id of $id is not found"); 

			App::abort(404);  
		}

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		

	    $validator = Validator::make(Input::all(), Post::$rules);

	    if ($validator->fails()) {

	    	Session::flash('errorMessage', 'Something went wrong, please refer to the errors listed below:');

	       return Redirect::back()->withInput()->withErrors($validator);
	    }

	    else {
			$post= Post::find($id);

			if(!$post) {

				Session::flash('errorMessage', "Post with id of $id is not found"); 

				App::abort(404);  
			}

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', 'Post updated succesfully!');


			return Redirect::action('PostsController@show', array($id));
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
		$post= Post::find($id);
		$post->delete();

		if(!$post) {
 
			Session::flash('errorMessage', "Post with id of $id is not found"); 

			App::abort(404); 
		}

		Session::flash('successMessage', 'Post deleted succesfully!');

		return Redirect::action('PostsController@index');
	}


}