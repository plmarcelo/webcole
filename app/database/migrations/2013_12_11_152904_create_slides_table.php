<?php

use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slides', function($table)
		{
			$table->increments('id');
			$table->string('title', 150);
			$table->string('filename', 150);
			$table->string('description', 255);
			$table->unsignedInteger('show_order')
				->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slides');
	}

}