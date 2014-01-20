<?php

use Illuminate\Database\Migrations\Migration;

class CreateSiteMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_menus', function($table)
		{
			$table->increments('id');
			$table->string('code', 30);
			$table->string('name', 150);

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
		Schema::drop('site_menus');
	}

}