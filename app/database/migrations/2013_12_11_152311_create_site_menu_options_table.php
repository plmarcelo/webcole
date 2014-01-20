<?php

use Illuminate\Database\Migrations\Migration;

class CreateSiteMenuOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_menu_options', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('site_menu_id');
			$table->unsignedInteger('parent_id');
			$table->string('label', 50);
			$table->string('route', 150);
			$table->unsignedInteger('show_order')
				->default(0);

			$table->foreign('site_menu_id')
				->references('id')
				->on('site_menus')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('parent_id')
				->references('id')
				->on('site_menu_options')
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
		Schema::drop('site_menu_options');
	}

}