<?php  
class ItemsTableSeeder extends Seeder {

	public function run()
	{
		

		$item = new Item();
		$item->item_name = 'Thuderfury, Blessed Blade of the Windseeker';
		$item->item_type = 'Weapon';
		$item->date_listed = '1902-05-22';
		$item->price = '150.00';
		$item->unit = 'g';
		$item->description = 'Did someone say Thunderfury?  Legendary! ';
		$item->item_number = '19019';
		$item->save();

	}

}

 ?>
		