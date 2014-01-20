<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('transport_id');
			$table->string('name', 150);
			$table->string('slug', 150);
			$table->string('place', 150);
			$table->text('description');
			$table->boolean('is_visible');
			$table->unsignedInteger('event_type_id');
			$table->date('start_date');
			$table->time('start_time');
			$table->date('end_date');
			$table->time('end_time');

			$table->foreign('transport_id')->references('id')->on('transports');
			$table->foreign('event_type_id')->references('id')->on('event_types');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}