<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'DefaultController@index');

// Login
Route::get('/login', 'UserController@get_login');
Route::post('/login', 'UserController@post_login');
Route::get('/logout', 'UserController@logout');


Route::group(array('prefix' => 'admin'), function()
{
	Route::group(array( 'before' => 'admin' ), function()
	{
		Route::get('/', 'Admin_DefaultController@index');

		// Document types
		Route::get('/doc_types', array(
				'as' => 'list_doc_types',
				'uses' => 'Admin_DocumentTypeController@index'
			)
		);
		Route::get('/doc_types/add', array(
				'as' => 'add_doc_type',
				'uses' => 'Admin_DocumentTypeController@add'
			)
		);
		Route::post('/doc_types/add', array(
				'as' => 'create_doc_type',
				'uses' => 'Admin_DocumentTypeController@create'
			)
		);
		Route::get('/doc_types/edit/{id}', array(
				'as' => 'edit_doc_type',
				'uses' => 'Admin_DocumentTypeController@edit'
			)
		);
		Route::post('/doc_types/edit/{id}', array(
				'as' => 'update_doc_type',
				'uses' => 'Admin_DocumentTypeController@update'
			)
		);

		Route::get('/docs', array(
				'as' => 'admin_docs',
				'uses' => 'Admin_DocumentController@getIndex'
			)
		);

		Route::get('/areas', 'AreaController@getIndex');

	});
});

Route::get('/user', function()
{
	$user = new User;
	$user->username = 'pepe';
	$user->email = 'pepe@ipbrown.com';
	$user->password = 'deadgiveaway';
	$user->password_confirmation = 'deadgiveaway';
	var_dump($user->save());
});