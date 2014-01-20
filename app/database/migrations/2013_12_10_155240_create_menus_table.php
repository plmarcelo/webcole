<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function($table)
		{
			$table->increments('id');
			$table->date('day');
			$table->string('first_dish', 150);
			$table->string('second_dish', 150);
			$table->string('extra_dish', 150);
			$table->string('dessert', 150);
			$table->text('comment')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}