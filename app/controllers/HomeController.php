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

	public function showWelcome()
	{
		return Redirect::action('PostsController@index');
	}

	public function showResume()
	{
		return View::make('resume');
	}

		public function createPosts()
	{
		return View::make('posts.create');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email'); 
		$password = Input::get('password'); 


		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', 'Logged in succesfully!');
			return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Logged in failed!'); 
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout(); 
		Session::flash('errorMessage', 'Logged out!'); 
		return Redirect::to('/');
	}

}
