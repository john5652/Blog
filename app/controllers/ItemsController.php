<?php

class ItemsController extends \BaseController {

public function __construct()
	{
		parent::__construct(); 
		$this->beforeFilter('wowAuth', array('except' => array('index', 'show', 'showLogin', 'doLogin', 'userCreate', 'storeUser'))); 
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$items = Item::paginate(5);
		return View::make('ads.ads_show')->with('items', $items);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ads.ads_create');
	}

	public function showLogin()
	{
		return View::make('ads.ads_auth_login');
	}

	public function doLogin()
	{
		$email = Input::get('email'); 
		$password = Input::get('password'); 


		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			return Redirect::action('ItemsController@index');
		} else {
			Session::flash('errorMessage', 'Logged in failed!'); 
			return Redirect::action('ItemsController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout(); 
		Session::flash('errorMessage', 'Logged out!'); 
		return Redirect::action('ItemsController@showLogin');
	}

		public function characterCreate()
	{
		return View::make('ads.ads_character_create');
	}

			public function userCreate()
	{
		return View::make('ads.ads_users_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$item= new Item();
			$item->item_name = Input::get('item_name');
			$item->item_type = Input::get('item_type');
			$item->date_listed = Input::get('date_listed');
			$item->price = Input::get('price');
			$item->unit = Input::get('unit');
			$item->description = Input::get('description');
			$item->item_number = Input::get('item_number');

			$item->save();

			return Redirect::action('ItemsController@index');

	}

	public function storeUser()
	{
		$user= new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->address_line_2 = Input::get('address_line_2');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip_code = Input::get('zip_code');
			$user->phone = Input::get('phone');

			$user->save();

			return Redirect::action('ItemsController@showLogin');

	}

		public function storeCharacter()
	{
		$character= new Character();
			$character->name = Input::get('name');
			$character->class = Input::get('class');
			$character->realm = Input::get('realm');
			$character->file = Input::get('file');
			$character->race = Input::get('race');
			$character->save();

			return Redirect::action('ItemsController@index');

	}
		




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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


}
