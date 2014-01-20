<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_area', function($table) {
			$table->integer('event_id');
			$table->integer('area_id');

			$table->primary(array('event_id','area_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_area');
	}

}