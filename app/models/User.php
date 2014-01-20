<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Ardent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Ardent validation rules
	 */
	public static $rules = array(
		'username' => 'required|between:4,16|unique:users',
		'email' => 'email',
//		'password' => 'required|alpha_num|min:8|confirmed',
//		'password_confirmation' => 'required|alpha_num|min:8',
	);

	public $autoPurgeRedundantAttributes = true;

	public static $customMessages = array(
		'required' => 'El :attribute es obligatorio.',
		'email'    => 'El email es incorrecto.',
	);

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function isLogged()
	{
		if(Session::has('user_id'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public static function isAdmin()
	{
		/*if(Session::get('user_type') > 1)
		{
			return true;
		}
		else
		{
			return false;
		}*/

		return true;

	}
}