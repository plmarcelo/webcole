<?php
/**
 * Created by PhpStorm.
 * User: uplm3a
 * Date: 5/12/13
 * Time: 15:17
 */

class UserTest extends TestCase
{
	/**
	 * Username is required
	 */
	public function testUsernameIsRequired()
	{
		// Create a new User
		$user = new User;
		$user->email = "phil@ipbrown.com";
		$user->password = "password";
		$user->password_confirmation = "password";

		// User should not save
		$this->assertFalse($user->save());

		// Save the errors
		$errors = $user->errors()->all();

		// There should be 1 error
		$this->assertCount(1, $errors);

		// The username error should be set
		$this->assertEquals($errors[0], "El nombre de usuario es obligatorio.");
	}

	/**
	 * Email is right format
	 */
	public function testEmailIsRight()
	{
		// Create a new User
		$user = new User;
		$user->email = "phil_ipbrown.com";
		$user->username = "testusername";
		$user->password = "password";
		$user->password_confirmation = "password";

		// User should not save
		$this->assertFalse($user->save());

		// Save the errors
		$errors = $user->errors()->all();

		// There should be 1 error
		$this->assertCount(1, $errors);

		// The email error should be set
		$this->assertEquals($errors[0], "El email es incorrecto.");
	}
}