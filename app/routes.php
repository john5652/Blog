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

Route::get('/', 'HomeController@showWelcome');
Route::get('/resume', 'HomeController@showResume');
Route::get('/whackamole', 'HomeController@showWhack');
Route::get('/simon_says', 'HomeController@showSimon');
Route::get('/weather_map', 'HomeController@showWeather');

Route::get('/create', 'HomeController@createPosts');
Route::resource('posts', 'PostsController');
Route::get('/portfolio', function()
{
    return "This is my portfolio!";
});
Route::get('login', 'HomeController@showLogin'); 
Route::post('login', 'HomeController@doLogin'); 
Route::post('resume_contact', 'HomeController@sendEmail'); 
Route::get('logout', 'HomeController@doLogout'); 
Route::get('/sayhello/{name}', function($name)
{
    return View::make('my-first-view')->with('name', $name);
});
Route::get('/rolldice/{guess}', function($guess)
{
	$random = mt_rand(1,6); 		
	if($random == $guess) {
		$message = 'You guessed right!';
	} else {
		$message = 'You guessed wrong!';
	}
	$data = array(
		'guess' => $guess, 
		'random' => $random, 
		'message' => $message
		);
	return View::make('rolldice')->with($data);
});

Route::get('orm-test', function ()
{
	
$post1 = new Post();
$post1->title = 'Eloquent is awesome!';
$post1->body  = 'It is super easy to create a new post.';
$post1->save();

$post2 = new Post();
$post2->title = 'Post number two';
$post2->body  = 'The body for post number two.';
$post2->save();

});
