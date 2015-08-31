<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_name', 50);
			$table->string('item_type', 50);
			$table->date('date_listed');
			$table->string('price', 10000);
			$table->string('description', 2500);
			$table->string('item_number', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}
}



