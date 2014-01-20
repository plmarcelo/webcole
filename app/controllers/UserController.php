<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Muestra la página de login
	 *
	 * @return Response
	 */
	public function get_login()
	{
		if(User::isLogged())
		{
			return Redirect::to('/');
		}
		else
		{
			return View::make('users.login');
		}
	}

	/**
	 * Valida si el login ha sido correcto.
	 *
	 * @return Response
	 */
	public function post_login()
	{
		$input = Input::all();

		$rules = array(
			'username'  => 'required|exists:users,username',
			'password'  => 'required',
		);

		$validator = Validator::make($input, $rules);

		if( $validator->fails() )
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$username = Input::get('username');
			$password = Input::get('password');

			if($user = User::where('username', '=', $username)->first())
			{
				if(Hash::check($password, $user->password))
				{
					Session::put('user_id', $user->id);
					Session::put('user_username', $user->username);
					Session::put('user_type', 'admin' );
					return Redirect::to('/admin');
				}
				else
				{
					return Redirect::to('/login');
				}
			}
			else
			{
				return Redirect::to('/login');
			}
		}
	}

	/**
	 * cerrar sesion
	 *
	 * @return Response
	 */
	public function logout()
	{
		Session::flush();
		return Redirect::to('/');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}