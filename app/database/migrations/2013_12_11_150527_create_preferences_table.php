<?php

use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preferences', function($table)
		{
			$table->increments('id');
			$table->string('code', 30);
			$table->string('name', 150);
			$table->text('value');
			$table->enum('type', array('str', 'int', 'bool', 'date'))
				->default('str');

			$table->unique('code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preferences');
	}

}