<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('gallery_id');
			$table->string('title', 150);
			$table->string('filename', 150);
			$table->string('description', 255)->nullable();
			$table->boolean('is_visible')->index('idx_photo_visible');
			$table->integer('show_order');
			$table->timestamps();

			$table->foreign('gallery_id')->references('id')->on('galleries');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
	}

}