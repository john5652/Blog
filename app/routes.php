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

Route::get('/', 'HomeController@showResume');
Route::get('/resume', 'HomeController@showResume');
Route::get('/whackamole', 'HomeController@showWhack');
Route::get('/simon_says', 'HomeController@showSimon');
Route::get('/weather_map', 'HomeController@showWeather');

Route::get('/create', 'HomeController@createPosts');

Route::get('index', 'ItemsController@index'); 
Route::get('items/login', 'ItemsController@showLogin');
Route::post('items/login', 'ItemsController@doLogin'); 
Route::get('items/logout', 'ItemsController@doLogout');
Route::post('users/create', 'ItemsController@storeUser');
Route::post('blog/users/create', 'PostsController@storeUser');
Route::post('characters/create', 'ItemsController@storeCharacter');

Route::resource('posts', 'PostsController');
Route::resource('items', 'ItemsController');
Route::get('create', 'ItemsController@characterCreate');
Route::get('usersCreate', 'ItemsController@userCreate');
Route::get('blogUsersCreate', 'PostsController@userCreate');

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

