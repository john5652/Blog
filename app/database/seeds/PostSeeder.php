<?php  

use Faker\Factory as Faker; 

class PostSeeder extends Seeder 
{

	public function run()
	{

		$faker = Faker::create();


			for($i=0; $i<20; $i++) {
				$post = new Post();
				$post->title = $faker->catchPhrase;
				$post->body = $faker->bs . 'and International' . $faker->bs;
				$post->user_id = User::all()->random(1)->id; 
				$post->save();
			}
	}
}