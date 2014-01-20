<?php

use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galleries', function($table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('slug', 150);
			$table->boolean('is_visible')->index('idx_gallery_visible');
			$table->text('description')->nullable();
			$table->date('start_date');
			$table->date('end_date');
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
		Schema::drop('galleries');
	}

}