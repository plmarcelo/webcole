<?php

/**
 * Films model config
 */

return array(

	'title' => 'Tipos de documento',

	'single' => 'tipo de documento',

	'model' => 'DocumentType',

	/**
	 * The display columns
	 */
	'columns' => array(
		'name' => array(
			'title' => 'Nombre'
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'name' => array(
			'title' => 'Nombre',
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Nombre',
		),
	),

);