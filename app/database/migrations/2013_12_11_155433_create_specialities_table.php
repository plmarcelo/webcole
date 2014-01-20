<?php

use Illuminate\Database\Migrations\Migration;

class CreateSpecialitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialities', function($table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('description', 255);
			$table->unsignedInteger('show_order')
				->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialities');
	}

}