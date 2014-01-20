<?php

use Illuminate\Database\Migrations\Migration;

class CreateClassroomLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classroom_levels', function($table)
		{
			$table->increments('id');
			$table->string('name', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('classroom_levels');
	}

}