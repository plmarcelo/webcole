<?php

/**
 * Films model config
 */

return array(

	'title' => 'Documentos',

	'single' => 'documento',

	'model' => 'Document',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Nombre'
		),
		'document_type' => array(
			'title' => 'Tipo',
			'relationship' => 'documentType',
			'select' => "(:table).name"
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'name' => array(
			'title' => 'Nombre',
		),
		'documentType' => array(
			'title' => 'Tipo de documento',
			'type' => 'relationship',
			'name_field' => 'name',
			'options_sort_field' => "name",
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Nombre',
		),
		'documentType' => array(
			'title' => 'Tipo de documento',
			'type' => 'relationship',
			'name_field' => 'name',
			'options_sort_field' => "name",
		),
		'description' => array(
			'title' => 'Descripción',
			'type' => 'textarea',
			'limit' => '255',
		),
		'is_visible' => array(
			'title' => 'Activo',
			'type' => 'bool',
		),
		'filename' => array(
			'title' => 'Archivo',
			'type' => 'file',
			'location' => public_path() . '/uploads/documents/',
			'naming' => 'random',
			'length' => 20,
			'size_limit' => 2,
			'mimes' => 'pdf,psd,doc',
		),
	),

);