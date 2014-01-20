<?php

use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classrooms', function($table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->unsignedInteger('classroom_level_id');

			$table->foreign('classroom_level_id')->references('id')->on('classroom_levels');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('classrooms');
	}

}