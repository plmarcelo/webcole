<?php
use LaravelBook\Ardent\Ardent;

class DocumentType extends Ardent
{
	/**
	 * Ardent validation rules
	 */
	public static $rules = array(
		'name' => 'required|min:4',
	);

	public static $customMessages = array(
		'name' => 'El :attribute es obligatorio.',
	);

	public function documents()
	{
		return $this->hasMany('Document');
	}

	public function save(array $rules = array(),
	                     array $customMessages = array(),
	                     array $options = array(),
	                     Closure $beforeSave = null,
	                     Closure $afterSave = null
	)
	{
		var_dump( $this->name );exit;
		parent::save($rules,
			$customMessages,
			$options,
			$beforeSave,
			$afterSave
		);
	}
}