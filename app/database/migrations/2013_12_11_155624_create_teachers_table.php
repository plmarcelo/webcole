<?php

use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('task_id');
			$table->unsignedInteger('speciality_id');
			$table->string('name', 150);
			$table->string('slug', 150);
			$table->string('photo', 150);
			$table->string('classroom_level', 150);
			$table->string('email', 100);
			$table->string('phone', 100);
			$table->string('description', 255);
			$table->boolean('is_visible');

			$table->foreign('speciality_id')->references('id')->on('specialities');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teachers');
	}

}