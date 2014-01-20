<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'username'  => 'admin',
			'name'      => 'Administrador',
			'email'     => 'plmarcelo@gmail.com',
			'password'  => Hash::make( 'pepe1234' ),
			'password_confirmation'  => Hash::make( 'pepe1234' ),
		));
	}
}