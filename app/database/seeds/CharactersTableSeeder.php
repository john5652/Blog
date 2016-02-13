<?php  
class CharactersTableSeeder extends Seeder {

	public function run()
	{
		

		$character = new Character();
		$character->name = 'Ellerion';
		$character->class = 'Mage';
		$character->race = 'Human';
		$character->realm = 'Darkspear';
		$character->file = '';
		$character->save();

	}

}

 ?>