<?php

use Illuminate\Database\Migrations\Migration;

class CreatePageTextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_texts', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('page_id');
			$table->string('name', 150);
			$table->string('code', 30);
			$table->text('value');

			$table->foreign('page_id')
				->references('id')
				->on('pages')
				->onDelete('cascade')
				->onUpdate('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('page_texts');
	}

}