<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventClassroomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_classroom', function($table) {
			$table->integer('event_id');
			$table->integer('classroom_id');

			$table->primary(array('event_id','classroom_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_classroom');
	}

}