<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->delete();
		DB::table('users')->delete();
		DB::table('items')->delete();

		$this->call('UsersTableSeeder');
		$this->call('PostSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('CharactersTableSeeder');
	}

}
