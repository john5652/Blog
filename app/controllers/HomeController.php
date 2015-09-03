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

	public function sendEmail()
	{
		$data = array(
			'name' => Input::get('c_name'),
			'email' => Input::get('c_email'),
			'body' => Input::get('c_message')
		); 

		Mail::send('emails.resume_email', $data, function($message) {
			$message->from(Input::get('c_email'), Input::get('c_name'));
    		$message->to('johnathan.christopherson@live.com', 'Johnathan Christopherson');
    		$message->subject('Resume Email');
		});

		Session::flash('successMessage', "Email sent succesfully!"); 
		return Redirect::action('HomeController@showResume');


	}
			


	public function showWelcome()
	{
		return Redirect::action('PostsController@index');
	}

	public function showResume()
	{
		return View::make('resume');
	}

		public function showWhack()
	{
		return View::make('whack-a-mole');
	}

			public function showWeather()
	{
		return View::make('weather');
	}


	public function showSimon()
	{
		return View::make('simon-says');
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
		return Redirect::action('HomeController@showLogin');
	}

}
