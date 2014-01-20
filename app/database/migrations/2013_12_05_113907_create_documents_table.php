<?php

use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function($table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('slug', 150);
			$table->string('filename', 150);
			$table->string('description', 255)->nullable();
			$table->boolean('is_visible')->index('idx_document_visible');
			$table->unsignedInteger('document_type_id');
			$table->timestamps();

			$table->foreign('document_type_id')->references('id')->on('document_types');
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